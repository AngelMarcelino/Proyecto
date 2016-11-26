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


function ejecutaMuchosResultados($cadena) // devuelve un arreglo con los resultados
{
    global $conecta;
    $resultado = mysqli_query($conecta, $cadena);

    if(!$resultado)
    {
        return false;
    }
    $arrayResultado = array();  
    while($fila = mysqli_fetch_assoc($resultado))
    {
        $arrayResultado[] = $fila;
    }
    return $arrayResultado;
}

function ejecutaUnResultado(){
    global $conecta;
    $resultado = mysqli_query($conecta, $cadena);
    if($resultado)
    {
        return mysqli_fetch_row($resultado);
    }
    return false;
}

function ejecutaNoResultado($cadena)
{
    global $conecta;
    $resultado = mysqli_query($conecta, $cadena);
    if($resultado)
    {
        return true;
    }
    else{
        return false;
    }
}

?>