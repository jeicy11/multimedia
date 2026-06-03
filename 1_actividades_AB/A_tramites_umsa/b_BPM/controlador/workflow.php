<?php

session_start();

if (!isset($_SESSION["usuario"])) {

    header("Location: login.php");
    exit();
}

/*
========================================
ARCHIVOS JSON
========================================
*/

$archivoFlujo = "json/flujoproceso.json";
$archivoSeguimiento = "json/seguimiento.json";
$archivoUsuarios = "json/usuarios.json";

/*
========================================
LEER JSON
========================================
*/

$flujos = json_decode(
    file_get_contents($archivoFlujo),
    true
);

$seguimientos = json_decode(
    file_get_contents($archivoSeguimiento),
    true
);

$usuarios = json_decode(
    file_get_contents($archivoUsuarios),
    true
);

/*
========================================
PARAMETROS
========================================
*/

$flujo = $_GET["flujo"];
$proceso = $_GET["proceso"];
$ticket = $_GET["ticket"];

/*
========================================
BUSCAR PROCESO ACTUAL
========================================
*/

$procesoActual = null;

foreach ($flujos as $f) {

    if (
        $f["flujo"] == $flujo &&
        $f["proceso"] == $proceso
    ) {

        $procesoActual = $f;
        break;
    }
}

if ($procesoActual == null) {

    die("Proceso no encontrado");
}

/*
========================================
PANTALLA
========================================
*/

$pantalla = "pantallas/" . $procesoActual["pantalla"];

/*
========================================
CUANDO PRESIONA SIGUIENTE
========================================
*/

if (isset($_POST["Siguiente"])) {

    /*
    ========================================
    CERRAR PROCESO ACTUAL
    ========================================
    */

    for ($i = 0; $i < count($seguimientos); $i++) {

        if (
            $seguimientos[$i]["ticket"] == $ticket &&
            $seguimientos[$i]["flujo"] == $flujo &&
            $seguimientos[$i]["proceso"] == $proceso &&
            $seguimientos[$i]["fechaFin"] == null
        ) {

            $seguimientos[$i]["fechaFin"] =
                date("Y-m-d H:i:s");

            break;
        }
    }

    /*
    ========================================
    SIGUIENTE PROCESO
    ========================================
    */

    $siguiente =
        $procesoActual["procesoSiguiente"];

    /*
    ========================================
    SI NO ES EL FINAL
    ========================================
    */

    if ($siguiente != null) {

        /*
        ========================================
        BUSCAR DATOS DEL SIGUIENTE
        ========================================
        */

        $procesoSiguiente = null;

        foreach ($flujos as $f) {

            if (
                $f["flujo"] == $flujo &&
                $f["proceso"] == $siguiente
            ) {

                $procesoSiguiente = $f;
                break;
            }
        }

        /*
        ========================================
        ROL SIGUIENTE
        ========================================
        */

        $rolSiguiente =
            $procesoSiguiente["rol"];

        /*
        ========================================
        BUSCAR USUARIO DEL ROL
        ========================================
        */

        $usuarioSiguiente = null;

        foreach ($usuarios as $u) {

            if ($u["rol"] == $rolSiguiente) {

                $usuarioSiguiente =
                    $u["usuario"];

                break;
            }
        }

        /*
        ========================================
        NUEVO ID
        ========================================
        */

        $nuevoId = count($seguimientos) + 1;

        /*
        ========================================
        INSERTAR NUEVO SEGUIMIENTO
        ========================================
        */

        $nuevoSeguimiento = [

            "id" => $nuevoId,

            "flujo" => $flujo,

            "proceso" => $siguiente,

            "ticket" => (int)$ticket,

            "usuario" => $usuarioSiguiente,

            "fechaInicio" =>
                date("Y-m-d H:i:s"),

            "fechaFin" => null
        ];

        $seguimientos[] = $nuevoSeguimiento;
    }

    /*
    ========================================
    GUARDAR JSON
    ========================================
    */

    file_put_contents(
        $archivoSeguimiento,
        json_encode(
            $seguimientos,
            JSON_PRETTY_PRINT
        )
    );

    /*
    ========================================
    SI TERMINA EL FLUJO
    ========================================
    */

    if ($siguiente == null) {

        echo "

        <html>

        <head>
            <title>Proceso Finalizado</title>
        </head>

        <body style='font-family:Arial; margin:40px;'>

        <h2>
        Trámite Finalizado Correctamente
        </h2>

        <p>
        El workflow terminó exitosamente.
        </p>

        <a href='bandeja.php'>
            Volver a Bandeja
        </a>

        </body>

        </html>

        ";

        exit();
    }

    /*
    ========================================
    REDIRECCIONAR
    ========================================
    */

    header("Location: bandeja.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>
        Workflow UMSA
    </title>

</head>

<body style="font-family:Arial; margin:40px;">

<div style="float:right;">

    <a href="logout.php"
       style="
       color:red;
       text-decoration:none;
       ">

       Cerrar Sesión

    </a>

</div>

<h2>
Sistema Workflow UMSA
</h2>

<hr>

<p>

<strong>Flujo:</strong>
<?php echo $flujo; ?>

<br>

<strong>Proceso:</strong>
<?php echo $proceso; ?>

<br>

<strong>Ticket:</strong>
<?php echo $ticket; ?>

</p>

<hr>

<?php

if (file_exists($pantalla)) {

    include($pantalla);

} else {

    echo "

    <div style='color:red;'>

    Error:
    No existe la pantalla:
    $pantalla

    </div>";
}

?>

<br><br>

<a href="bandeja.php">

Volver a Bandeja

</a>

</body>
</html>