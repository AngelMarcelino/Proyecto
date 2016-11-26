<?php
include("../inc/conectai.php");

$consulta = "select Nombre, NombreUsuario, Correo, concat(Calle, ' ', NInt) as Domicilio from Usuarios ";
$resultado = mysqli_query($conecta, $consulta);
$usuarios = array();
if($resultado)
{
    while($row = mysqli_fetch_assoc($resultado))
    {
        $usuarios[] = $row;
    }
}

?>
