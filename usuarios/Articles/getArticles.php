<?php
include("../inc/conectai.php");
$IdUsuario = $_SESSION["usuario"]["Id"];
$consulta = "select Articulos.Id as Id, Articulos.Nombre as Nombre,"
. "Descripcion, Categorias.Nombre as Categoria,  Cantidad, PrecioVenta from" . 
" Articulos inner join Categorias on IdCategoria = Categorias.Id where IdUsuario = $IdUsuario";
$articulos = ejecutaMuchosResultados($consulta);


?>
