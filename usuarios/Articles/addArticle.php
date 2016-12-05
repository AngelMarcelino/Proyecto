<?php
include("../../inc/conectai.php");
session_start();
$nombre = $_POST["Nombre"];
$idcategoria = $_POST["IdCategoria"];
$descripcion = $_POST["Descripcion"];
$precioVenta = $_POST["PrecioVenta"];
$cantidad = $_POST["Cantidad"];

$consulta = "select Descripcion from Articulos where Descripcion ='$descripcion' and Nombre = '$nombre'";
$resultado = mysqli_query($conecta, $consulta);
$destino;
          // obtenemos los datos del archivo
          $tamano = $_FILES["Foto"]['size'];
          $tipo = $_FILES["Foto"]['type'];
          $archivo = $_FILES["Foto"]['name'];
          $prefijo = substr(md5(uniqid(rand())),0,6);
              // guardamos el archivo a la carpeta files, si no existe la tienes q crear antes de subir los archivos.
              $destino =  "files/imgArticulos/".$prefijo."_".$archivo;
              if (move_uploaded_file($_FILES["Foto"]["tmp_name"], '../../' . $destino)) {
                  $status = "Archivo subido con exito: <b>".$archivo."</b><br>";
                  echo $status;
              }
			  else {
                  $status = "Error al subir el archivo";
                  echo $status;
              }

if(!$resultado)
    echo "Hubo un error";
else
{
    $nr = mysqli_num_rows($resultado);
    if($nr >= 1)
        header("Location:../index.php?notificacion=Ya se encuentra este articulo, aumente las existenias en vez de agregar uno nuevo");
    else
    {
        $idusuario = $_SESSION["usuario"]["Id"];
        $consulta = "insert into Articulos" .
            " (Nombre, Descripcion, IdCategoria, PrecioVenta, Cantidad, IdUsuario, Foto)" .
             " values ('$nombre', '$descripcion', '$idcategoria', '$precioVenta', '$cantidad', '$idusuario', '$destino')";
             echo $consulta;
        if (mysqli_query($conecta, $consulta)) {
            header("Location:../index.php?notificacion=agregado correctamente");
        } else {
            echo "Error: " . $consulta . "<br>" . mysqli_error($conn) . $contra;
        }
    }
}
?>