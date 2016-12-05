<?php
include("../inc/conectai.php");
$Id = $_GET["categoria"];
$consulta = "select * from Categorias where Id = " . $Id;
echo $consulta;
$categoria = ejecutaUnResultado($consulta);
?>