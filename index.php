<?php 
require_once "Controladores/rutasC.php";
require_once "Controladores/adminC.php";
require_once "Modelos/rutasM.php";
require_once "Modelos/adminM.php";

$rutas = new RutasControlador();
$rutas -> Plantilla();

?>