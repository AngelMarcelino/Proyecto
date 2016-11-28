<?php
include("../inc/conectai.php");
$idUsuario = $_SESSION["usuario"]["Id"];
$consulta = "select Articulos.Nombre as NombreArticulo" .
", UsuariosArticulos.Cantidad as Cantidad, SubTotal, Usuarios.Nombre as NombreUsuario, ".
"Articulos.Foto as Foto, PrecioVenta, UsuariosArticulos.Id as CartItemId".
" from UsuariosArticulos inner join Articulos on IdArticulo = Articulos.Id inner join Usuarios on ".
"Articulos.IdUsuario = Usuarios.Id ".
"where UsuariosArticulos.IdUsuario = " . $idUsuario;
$articulosCarrito = ejecutaMuchosResultados($consulta);
$total = ejecutaUnResultado("select SUM(SubTotal) as Total from UsuariosArticulos where IdUsuario =" . $idUsuario);
?>