<?php
$local = "127.0.0.1";
$usuario = "root";
$contra = "";
$bd = "proyecto";

$conecta = new mysqli($local, $usuario, $contra, $bd);
if($conecta->connect_errno)
{
    echo "Fallo al conectar con MySQL: (" . $mysqli->connect_errno . ") " .$mysqli->connect->error;
}

?>