<?php
include("../inc/conectai.php");
$IdUsuario = $_SESSION["usuario"]["Id"];
$consulta = "select Articulos.Id as Id, Articulos.Nombre as Nombre,"
. "Descripcion, Categorias.Nombre as Categoria,  Cantidad, PrecioVenta from" . 
" Articulos inner join Categorias on IdCategoria = Categorias.Id where IdUsuario = $IdUsuario";
$categoria = "";
 
if(isset($_GET["categoria"]))
{
    $consulta = $consulta . " and IdCategoria = " . $_GET["categoria"];
    $categoria = ejecutaUnResultado("select * from Categorias where Id = " . $_GET["categoria"]);
    $categoria = " - " . $categoria["Nombre"];
}

$articulos = ejecutaMuchosResultados($consulta);
$categorias = ejecutaMuchosResultados("select * from Categorias");

?>
