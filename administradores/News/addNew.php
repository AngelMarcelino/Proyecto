<?php
include("../../inc/conectai.php");
session_start();


$contenido = $_POST["Contenido"];
$titulo = $_POST["Titulo"];

$destino;
// obtenemos los datos del archivo
$tamano = $_FILES["Imagen"]['size'];
$tipo = $_FILES["Imagen"]['type'];
$archivo = $_FILES["Imagen"]['name'];
$prefijo = substr(md5(uniqid(rand())), 0, 6);
// guardamos el archivo a la carpeta files, si no existe la tienes q crear antes de subir los archivos.
$destino =  "files/imgNoticias/".$prefijo."_".$archivo;
if (move_uploaded_file($_FILES["Imagen"]["tmp_name"], '../../' . $destino)) {
    $status = "Archivo subido con exito: <b>".$archivo."</b><br>";
    echo $status;
} else {
    $status = "Error al subir el archivo";
    echo $status;
}

// Archivo en donde se acumular� el numero de visitas
$archivo = "../../files/Noticias/contadorNoticias.txt";
// Abrimos el archivo para solamente leerlo (r de read)
if(!file_exists($archivo))
{
    $a = fopen($archivo, "w");
    fwrite($a, "-1");
    fclose($a);
}

$abre = fopen($archivo, "r");
// Leemos el contenido del archivo
$total = fread($abre, filesize($archivo));
if(strlen($total) == 0)
{
    fclose($abre);
    $abre = fopen($archivo, "w");
    fwrite($abre, "-1"); 
}

// Cerramos la conexi�n al archivo
fclose($abre);
// Abrimos nuevamente el archivo para escribir y borrar 
$abre = fopen($archivo, "w");
// Sumamos 1 nueva visita
$total = $total + 1;
// Y reemplazamos por la nueva cantidad de visitas en el archivo
$grabar = fwrite($abre, $total);
// Cerramos la conexi�n al archivo
fclose($abre);
// Imprimimos el total de visitas d�ndole un formato
$noticia = fopen("../../files/Noticias/Noticia" . $total . ".txt", "w");
$contenidoNoticia = '<div class="media">'.
                        '<div class="media-left">' .
                            '<a href="#">' . 
                                '<img class="media-object" src="' . $destino . '">' .
                            '</a>' . 
                        '</div>' .
                        '<div class="media-body">' . 
                            '<h4 class="media-heading">' . $titulo . '</h4>' . ' <i> ' . date("Y-m-d H:i:s") . '</i>'.  
                            '<p>' . $contenido . '</p>' . 
                        '</div>' . 
                    '</div>';
fwrite($noticia, $contenidoNoticia);
fclose($noticia);   
header("Location: ../index.php");
?>