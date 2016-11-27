<?php

include("../inc/conectai.php");
$IdUsuario = $_SESSION["usuario"]["Id"];
$consulta = "select Articulos.Id as Id, Articulos.Nombre as Nombre,"
. "Descripcion, Categorias.Nombre as Categoria,  Cantidad, PrecioVenta, Foto from" . 
" Articulos inner join Categorias on IdCategoria = Categorias.Id";
$categoria = "";
if(isset($_GET["categoria"]))
{
    $categoria = $_GET["categoria"];
    $consulta = $consulta . " where IdUsuario <> $IdUsuario and IdCategoria = " . $categoria;
    $result = ejecutaUnResultado("select Nombre from Categorias where Id = " . $categoria);
    $categoria = " - " . $result["Nombre"];
}
else{
    $consulta = $consulta . " where IdUsuario <> $IdUsuario";
}
$articulos = ejecutaMuchosResultados($consulta);

?>
