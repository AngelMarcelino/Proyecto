<?php
include("../../inc/conectai.php");
include("../../utils.php");


$nombre = $_POST["Nombre"];
$idcategoria = $_POST["IdCategoria"];
$descripcion = $_POST["Descripcion"];
$precioVenta = $_POST["PrecioVenta"];
$cantidad = $_POST["Cantidad"];
$Id = $_POST["Id"];

$consulta = "select Descripcion from Articulos where Descripcion ='$descripcion' and Nombre = '$nombre'";

$resultado = mysqli_query($conecta, $consulta);
$destino;
          // obtenemos los datos del archivo
          $tamano = $_FILES["Foto"]['size'];
          $tipo = $_FILES["Foto"]['type'];
          $archivo = $_FILES["Foto"]['name'];
          $prefijo = substr(md5(uniqid(rand())), 0, 6);
              // guardamos el archivo a la carpeta files, si no existe la tienes q crear antes de subir los archivos.
              $destino =  "../../files/imgArticulos/".$prefijo."_".$archivo;
              $status = "";
if (move_uploaded_file($_FILES["Foto"]["tmp_name"], $destino)) {
    $status = "Archivo subido con exito: <b>".$archivo."</b><br>";
    echo $status;
} else {
    $status = "Error al subir el archivo";
    echo $status;
}

if (!$resultado) {
    echo "Hubo un error";
} else {
    $consulta = "update Articulos set" .
            " Nombre        = '$nombre' ," .
            " Descripcion   = '$descripcion' ," .
            " IdCategoria   = '$idcategoria' ," .
            " PrecioVenta   = '$precioVenta' ," .
            " Cantidad      = '$cantidad' ," .
            " Foto          = '" . quitaCarpetaPadre($destino) ."'  where Id = $Id";
             echo $consulta;
        if (mysqli_query($conecta, $consulta)) {
            $pagina = urlParams("Articles/articulos.html", array("notificacion" => "Guardado con exito"));
            header("Location:../" . $pagina);
        } else {
            echo "Error: " . $consulta . "<br>" . mysqli_error($conn) . $contra;
        }
        
}
?>