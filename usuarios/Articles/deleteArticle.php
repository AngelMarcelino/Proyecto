<?php
include("../../inc/conectai.php");
include("../../utils.php");
$Id = $_GET["articulo"];
$consulta = "delete from Articulos where Id = $Id";
if(ejecutaNoResultado($consulta))
{
    
    header("Location:../" . url("Articles/articulos.html"));
}
else
{
    echo "Error";
}
?>