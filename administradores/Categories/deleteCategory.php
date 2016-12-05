<?php
include("../../inc/conectai.php");
include("../../utils.php");
$Id = $_GET["categoria"];
$consulta = "delete from Categorias where Id = $Id";
if(ejecutaNoResultado($consulta))
{
    
    header("Location:../" . url("Categories/categorias.html"));
}
else
{
    echo "Error";
}
?>