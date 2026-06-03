<?php

session_start();

/*
========================================
DESTRUIR SESION
========================================
*/

session_unset();

session_destroy();

/*
========================================
REDIRECCIONAR
========================================
*/

header("Location: login.php");
exit();

?>