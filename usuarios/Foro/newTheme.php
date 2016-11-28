<?php
include("../../inc/conectai.php");
include("../../utils.php");

session_start();
$nombre = $_POST["Nombre"];
$contenido = $_POST["Contenido"];
$idUsuario = $_SESSION["usuario"]["Id"];
$idCategoria = $_POST["IdCategoria"];
$fechaCreacion = date("Y-m-d H:i:s");

$consulta = "insert into Temas (Nombre, Contenido, IdUsuario, IdCategoria, FechaCreacion) ".
    "values ('$nombre', '$contenido', '$idUsuario', '$idCategoria', '$fechaCreacion')";
    $resultado = mysqli_query($conecta, $consulta);
    if($resultado)
    {
        $consulta = "select Id from Temas order by Id desc";
        $resultado = mysqli_query($conecta, $consulta);
        $Id = mysqli_fetch_assoc($resultado)["Id"];
        header("Location:../". url("Foro/viewTema.php&tema=" . $Id));
    }
    else
    {
        header("Location:../". url("Foro/list.php"));
        
    }
?>

