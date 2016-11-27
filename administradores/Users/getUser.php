<?php
include("../inc/conectai.php");
$Id = $_GET["usuario"];
$consulta = "select * from Usuarios where Id = " . $Id;
echo $consulta;
$usuario = ejecutaUnResultado($consulta);
?>