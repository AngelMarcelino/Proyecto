<?php
include("../utils.php");
include("../inc/conectai.php");
session_start();
$idArticulo = $_GET["articulo"];
$cantidad = $_GET["cantidad"];
$idUsuario = $_SESSION["usuario"]["Id"];
$articulo = ejecutaUnResultado("select * from Articulos where Id = " . $idArticulo);
$consulta = "select * from UsuariosArticulos where IdArticulo = " . $idArticulo;
$resultado = mysqli_query($conecta, $consulta);
if($resultado)
{
    $nr = mysqli_num_rows($resultado);
    if($nr > 0)
    {
        $usuarioArticulo = mysqli_fetch_assoc($resultado);
        $cantidadExistente = intval($usuarioArticulo["Cantidad"]) + intval($cantidad);
        $consulta = "update UsuariosArticulos set " .
        "Cantidad = "  . $cantidadExistente . ", " . 
        "SubTotal = " . $cantidadExistente * floatval($articulo["PrecioVenta"]);
        $resultado = mysqli_query($conecta, $consulta);
        
    }
    else{
        $consulta = "insert into UsuariosArticulos (IdArticulo, IdUsuario, Cantidad, SubTotal)"
        . " values ('$idArticulo', '$idUsuario', '$cantidad', '". floatval($articulo["PrecioVenta"]) * intval($cantidad) . "')";
        $resultado = mysqli_query($conecta, $consulta);
    }
    if($resultado)
    {
        header("Location: index.php?notificacion=Agregado");
    }
    else{
        header("Location: index.php?notificacion=Error");
        
    }
}
else{
    echo "Error";
}


?>

