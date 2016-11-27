<?php
include("../../inc/conectai.php");
include("../../utils.php");

$nombre = $_POST["Nombre"];
$correo = $_POST["Correo"];
$nombreUsuario = $_POST["NombreUsuario"];
$contra = $_POST["Contra"];
$colonia = $_POST["Colonia"];
$calle = $_POST["Calle"];
$numero = $_POST["Numero"];
$Id = $_POST["Id"];

$consulta = "select nombre from Usuarios where Nombre ='$nombre'";
$resultado = mysqli_query($conecta, $consulta);
$destino;
          // obtenemos los datos del archivo
          $tamano = $_FILES["Foto"]['size'];
          $tipo = $_FILES["Foto"]['type'];
          $archivo = $_FILES["Foto"]['name'];
          $prefijo = substr(md5(uniqid(rand())), 0, 6);
              // guardamos el archivo a la carpeta files, si no existe la tienes q crear antes de subir los archivos.
              $destino =  "../../files/imgUsuarios/".$prefijo."_".$archivo;
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
    $consulta = "update Usuarios set" .
            " Nombre = '$nombre' ," .
            " Correo = '$correo' ," .
            " NombreUsuario = '$nombreUsuario' ," .
            " Contra = md5('$contra') ," .
            " Colonia = '$colonia' ," .
            " Calle = '$calle' ," .
            " NInt = '$numero' ," .
            " Foto = '" . quitaCarpetaPadre($destino) ."'  where Id = $Id";
             echo $consulta;
        if (mysqli_query($conecta, $consulta)) {
            $pagina = urlParams("Users/usuarios.html", array("notificacion" => "Guardado con exito"));
            header("Location:../" . $pagina);
        } else {
            echo "Error: " . $consulta . "<br>" . mysqli_error($conn) . $contra;
        }
        
}
?>