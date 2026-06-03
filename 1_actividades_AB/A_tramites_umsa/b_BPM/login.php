<?php

session_start();

if (isset($_SESSION["usuario"])) {
    header("Location: bandeja.php");
    exit();
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usuario = $_POST["usuario"];
    $password = $_POST["password"];

    /*
    Leer usuarios.json
    */

    $json = file_get_contents("json/usuarios.json");

    $usuarios = json_decode($json, true);

    $loginCorrecto = false;

    foreach ($usuarios as $u) {

        if (
            $u["usuario"] == $usuario &&
            $u["password"] == $password
        ) {

            $_SESSION["usuario"] = $u["usuario"];
            $_SESSION["nombre"] = $u["nombre"];
            $_SESSION["rol"] = $u["rol"];

            $loginCorrecto = true;

            header("Location: bandeja.php");
            exit();
        }
    }

    if (!$loginCorrecto) {
        $error = "Usuario o contraseña incorrectos";
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>
        Sistema Workflow UMSA
    </title>

</head>

<body style="font-family:Arial; margin:40px;">

<h1>
Sistema de Digitalización de Trámites UMSA
</h1>

<h2>
Iniciar Sesión
</h2>

<form method="POST">

    <label>Usuario:</label>

    <br>

    <input
        type="text"
        name="usuario"
        required
        style="width:250px; padding:8px;"
    >

    <br><br>

    <label>Contraseña:</label>

    <br>

    <input
        type="password"
        name="password"
        required
        style="width:250px; padding:8px;"
    >

    <br><br>

    <button
        type="submit"
        style="
        padding:10px 20px;
        background:#008CBA;
        color:white;
        border:none;
        cursor:pointer;
        "
    >
        Ingresar
    </button>

</form>

<br>

<?php

if ($error != "") {

    echo "
    <div style='color:red; font-weight:bold;'>
        $error
    </div>";
}

?>

<hr>

<h3>Usuarios de prueba</h3>

<table border="1" cellpadding="8">

<tr>
    <th>Usuario</th>
    <th>Rol</th>
</tr>

<tr>
    <td>juan</td>
    <td>estudiante</td>
</tr>

<tr>
    <td>kardex1</td>
    <td>kardex</td>
</tr>

<tr>
    <td>director1</td>
    <td>director1</td>
</tr>

<tr>
    <td>director2</td>
    <td>director2</td>
</tr>

<tr>
    <td>caja1</td>
    <td>caja</td>
</tr>

</table>

<p>
Todas las contraseñas:
<strong>123456</strong>
</p>

</body>
</html>