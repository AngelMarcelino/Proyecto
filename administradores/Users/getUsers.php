<?php
include("../inc/conectai.php");

$consulta = "select Id, Nombre, NombreUsuario, Correo, concat(Calle, ' ', NInt) as Domicilio from Usuarios ";
$usuarios = ejecutaMuchosResultados($consulta);


?>
