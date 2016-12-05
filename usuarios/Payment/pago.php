<?php
include("../../inc/conectai.php");
session_start();
$consulta = "delete from UsuariosArticulos where IdUsuario = " . $_SESSION["usuario"]["Id"];

if(ejecutaNoResultado($consulta))
{
    echo "Correcto";
    header("Location: ../index.php?notificacion=Pagado correctamente");
}

?>