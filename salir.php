<?php
require('core/core.php');
$salir = new Salir();
$salir->Logout();
session_start();
session_destroy();

header("Location: index.php?p=login");

 ?>
