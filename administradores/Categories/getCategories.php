<?php
include("../inc/conectai.php");

$consulta = "select Id, Nombre from Categorias ";
$categorias = ejecutaMuchosResultados($consulta);


?>
