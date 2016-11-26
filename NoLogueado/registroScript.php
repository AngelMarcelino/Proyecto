<?php
include("../inc/conectai.php");
$nombre = $_POST["Nombre"];
$correo = $_POST["Correo"];
$nombreUsuario = $_POST["NombreUsuario"];
$contra = $_POST["Contra"];
$colonia = $_POST["Colonia"];
$calle = $_POST["Calle"];
$numero = $_POST["Numero"];

$consulta = "select nombre from Usuarios where Nombre ='$nombre'";
$resultado = mysqli_query($conecta, $consulta);
$destino;
          // obtenemos los datos del archivo
          $tamano = $_FILES["Foto"]['size'];
          $tipo = $_FILES["Foto"]['type'];
          $archivo = $_FILES["Foto"]['name'];
          $prefijo = substr(md5(uniqid(rand())),0,6);
              // guardamos el archivo a la carpeta files, si no existe la tienes q crear antes de subir los archivos.
              $destino =  "../files/imgUsuarios/".$prefijo."_".$archivo;
              if (move_uploaded_file($_FILES["Foto"]["tmp_name"], $destino)) {
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
        header("Location:../index.php?e=Ya se encuentra en uso este nombre de usuario");
    else
    {

        $consulta = "insert into Usuarios" .
            " (Nombre, Correo, NombreUsuario, Contra, Colonia, Calle, NInt, Foto, IdNivel)" .
             " values ('$nombre', '$correo', '$nombreUsuario', md5('$contra'), '$colonia', '$calle',".
             "'$numero', '$destino', '2')";
             echo $consulta;
        if (mysqli_query($conecta, $consulta)) {
            header("Location:../index.php");
        } else {
            echo "Error: " . $consulta . "<br>" . mysqli_error($conn) . $contra;
        }
        echo $error;
    }
}
?>