<?php
include("../inc/conectai.php");
$Id = $_GET["articulo"];
$consulta = "select Articulos.*, Categorias.Nombre as Categoria from Articulos inner join Categorias on Articulos.IdCategoria = Categorias.Id where Articulos.Id = " . $Id;
$articulo = ejecutaUnResultado($consulta);
?>