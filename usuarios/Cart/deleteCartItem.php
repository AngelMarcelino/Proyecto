<?php
include("../../inc/conectai.php");
include("../../utils.php");
$cartItem = $_GET["CartItem"];
$consulta = "delete from UsuariosArticulos where Id = " . $cartItem;
$resultado = mysqli_query($conecta, $consulta);
if($resultado)
{
    header("Location: ../" . urlParams("Cart/viewCarrito.php", array("notificacion" => "Eliminado")));
}
else{
    header("Location: ../" . urlParams("Cart/viewCarrito.php", array("notificacion" => "Error")));

}
?>