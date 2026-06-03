<?php

session_start();

if (!isset($_SESSION["usuario"])) {

    header("Location: login.php");
    exit();
}

$usuario = $_SESSION["usuario"];

/*
Leer seguimiento.json
*/

$jsonSeguimiento = file_get_contents(
    "json/seguimiento.json"
);

$seguimientos = json_decode(
    $jsonSeguimiento,
    true
);

/*
Filtrar pendientes
*/

$pendientes = [];

foreach ($seguimientos as $s) {

    if (
        $s["usuario"] == $usuario &&
        $s["fechaFin"] == null
    ) {

        $pendientes[] = $s;
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>
        Bandeja de Entrada
    </title>

</head>

<body style="font-family:Arial; margin:40px;">

<div style="float:right;">

    <a href="logout.php"
       style="
       color:red;
       text-decoration:none;
       font-weight:bold;
       ">
       Cerrar Sesión
    </a>

</div>

<h2>
Bandeja de Entrada
</h2>

<hr>

<p>

<strong>Usuario:</strong>
<?php echo $_SESSION["nombre"]; ?>

<br>

<strong>Rol:</strong>
<?php echo $_SESSION["rol"]; ?>

</p>

<hr>

<h3>
Procesos Pendientes
</h3>

<table
border="1"
cellpadding="8"
cellspacing="0"
width="100%"
style="border-collapse:collapse;"
>

<tr style="background:#f2f2f2;">

    <th>ID</th>
    <th>Flujo</th>
    <th>Proceso</th>
    <th>Ticket</th>
    <th>Fecha Inicio</th>
    <th>Estado</th>
    <th>Acción</th>

</tr>

<?php

if (count($pendientes) == 0) {

    echo "
    <tr>

        <td colspan='7'
            align='center'>

            No tiene tareas pendientes

        </td>

    </tr>";
}

foreach ($pendientes as $p) {

?>

<tr>

    <td>
        <?php echo $p["id"]; ?>
    </td>

    <td>
        <?php echo $p["flujo"]; ?>
    </td>

    <td>
        <?php echo $p["proceso"]; ?>
    </td>

    <td>
        <?php echo $p["ticket"]; ?>
    </td>

    <td>
        <?php echo $p["fechaInicio"]; ?>
    </td>

    <td style="color:red;">
        Pendiente
    </td>

    <td>

        <!--
        <a href="workflow.php?
        flujo=<?php echo $p["flujo"]; ?>
        &proceso=<?php echo $p["proceso"]; ?>
        &ticket=<?php echo $p["ticket"]; ?>">
        -->

        <a href="workflow.php?flujo=<?php echo $p["flujo"]; ?>&proceso=<?php echo $p["proceso"]; ?>&ticket=<?php echo $p["ticket"]; ?>">


        Atender

        </a>

    </td>

</tr>

<?php
}
?>

</table>

<br><br>

<?php

if ($_SESSION["rol"] == "estudiante") {

?>

<a href="nuevo_tramite.php"
   style="
   padding:10px 20px;
   background:green;
   color:white;
   text-decoration:none;
   border-radius:5px;
   ">

   Solicitar Nuevo Trámite

</a>

<?php
}
?>

</body>
</html>