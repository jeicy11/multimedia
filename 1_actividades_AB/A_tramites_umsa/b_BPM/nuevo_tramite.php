<?php

session_start();

if (!isset($_SESSION["usuario"])) {

    header("Location: login.php");
    exit();
}

/*
========================================
SOLO ESTUDIANTES
========================================
*/

if ($_SESSION["rol"] != "estudiante") {

    die("Acceso denegado");
}

/*
========================================
ARCHIVOS JSON
========================================
*/

$archivoFlujos = "json/flujoproceso.json";
$archivoSeguimiento = "json/seguimiento.json";

/*
========================================
LEER JSON
========================================
*/

$flujos = json_decode(
    file_get_contents($archivoFlujos),
    true
);

$seguimientos = json_decode(
    file_get_contents($archivoSeguimiento),
    true
);

/*
========================================
GENERAR NUEVO TRAMITE
========================================
*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $flujoSeleccionado = $_POST["flujo"];

    /*
    ========================================
    BUSCAR P1 DEL FLUJO
    ========================================
    */

    $primerProceso = null;

    foreach ($flujos as $f) {

        if (
            $f["flujo"] == $flujoSeleccionado &&
            $f["tipo"] == "I"
        ) {

            $primerProceso = $f;
            break;
        }
    }

    if ($primerProceso == null) {

        die("No existe proceso inicial");
    }

    /*
    ========================================
    GENERAR NUEVO TICKET
    ========================================
    */

    $maxTicket = 1000;

    foreach ($seguimientos as $s) {

        if ($s["ticket"] > $maxTicket) {

            $maxTicket = $s["ticket"];
        }
    }

    $nuevoTicket = $maxTicket + 1;

    /*
    ========================================
    NUEVO ID
    ========================================
    */

    $nuevoId = count($seguimientos) + 1;

    /*
    ========================================
    CREAR NUEVO SEGUIMIENTO
    ========================================
    */

    $nuevoSeguimiento = [

        "id" => $nuevoId,

        "flujo" => $flujoSeleccionado,

        "proceso" =>
            $primerProceso["proceso"],

        "ticket" => $nuevoTicket,

        "usuario" =>
            $_SESSION["usuario"],

        "fechaInicio" =>
            date("Y-m-d H:i:s"),

        "fechaFin" => null
    ];

    /*
    ========================================
    AGREGAR
    ========================================
    */

    $seguimientos[] = $nuevoSeguimiento;

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
        Nuevo Trámite
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
Solicitar Nuevo Trámite
</h2>

<hr>

<form method="POST">

    <label>
    Seleccione el tipo de trámite:
    </label>

    <br><br>

    <select
        name="flujo"
        required
        style="
        width:300px;
        padding:8px;
        "
    >

        <option value="">
            -- Seleccionar --
        </option>

        <option value="F1">
            F1 - Inscripción de Materias
        </option>

        <option value="F2">
            F2 - Emisión de Certificados
        </option>


    </select>

    <br><br><br>

    <button
        type="submit"
        style="
        padding:10px 20px;
        background:green;
        color:white;
        border:none;
        cursor:pointer;
        ">

        Crear Trámite

    </button>

</form>

<br><br>

<a href="bandeja.php">

Volver a Bandeja

</a>

</body>
</html>