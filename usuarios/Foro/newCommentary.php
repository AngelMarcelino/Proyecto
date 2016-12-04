<?php
include("../../inc/conectai.php");
session_start();
$comentario = $_POST["Comentario"];
$idUsuario = $_SESSION["usuario"]["Id"];
$url = $_POST["url"];
$idTema = $_POST["IdTema"];
$fechaCreacion = date("Y-m-d H:i:s");

$consulta = "insert into Comentarios (Contenido, IdUsuario, IdTema, FechaCreacion) " . 
"values ('$comentario', '$idUsuario', '$idTema', '$fechaCreacion')";

ejecutaNoResultado($consulta);
header("Location:" . $url)
?>
