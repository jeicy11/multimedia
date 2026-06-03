<?php
session_start();

if (isset($_SESSION["usuario"])) {
    header("Location: bandeja.php");
    exit();
} else {
    header("Location: login.php");
    exit();
}
?>