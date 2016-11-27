<?php
include("../inc/conectai.php");
$Id = $_GET["articulo"];
$consulta = "select * from Articulos where Id = " . $Id;
echo $consulta;
$articulo = ejecutaUnResultado($consulta);
$categorias = ejecutaMuchosResultados("select * from Categorias");
?>