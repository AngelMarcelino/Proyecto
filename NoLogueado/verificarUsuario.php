<?php
include("../inc/conectai.php");
//Valida el usuario en la base de datos
$nombre = $_POST["NombreUsuario"];
$contra  = $_POST["Contra"];
$consulta = " select IdNivel, Id, Nombre, Foto from Usuarios where NombreUsuario ='$nombre' and contra = md5('$contra')";
$resultado = mysqli_query($conecta, $consulta);
echo $consulta;
if(!$resultado)
{
    $error = "Consulta Mal". $consulta;
    echo $error;
}
else
{
    echo "sino";
    $nr = mysqli_num_rows($resultado);
    if($nr >= 1)
    {
        $row = mysqli_fetch_array($resultado);
        session_start();
        $_SESSION["usuario"] = $row;
        switch ($row['IdNivel'])
        {
            case 1:
                header("Location:../administradores/index.php");
                break;
            case 2:
                header("Location:../usuarios/index.php");
                break;
        	default:
        }
    }
    else
    {
        $error = "No se encuentra";
        header("Location:../index.php?notificacion=$error");
        echo $error;
    }
}
?>