<?php
include("../../inc/conectai.php");
include("../../utils.php");
$Id = $_GET["usuario"];
$consulta = "delete from Usuarios where Id = $Id";
if(ejecutaNoResultado($consulta))
{
    
    header("Location:../" . url("Users/usuarios.html"));
}
else
{
    echo "Error";
}
?>