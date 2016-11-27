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

if(!function_exists("ejecutaMuchosResultados"))
{
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
}
if(!function_exists("ejecutaUnResultado"))
{
    function ejecutaUnResultado($cadena){
        global $conecta;
        $resultado = mysqli_query($conecta, $cadena);
        if($resultado)
        {
            return mysqli_fetch_assoc($resultado);
        }
        return false;
    }
}
if(!function_exists("ejecutaNoResultado"))
{
    
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
}






?>