<?php
include("../../inc/conectai.php");
include("../../utils.php");

$nombre = $_POST["Nombre"];
$Id = $_POST["Id"];


    $consulta = "update Categorias set" .
            " Nombre = '$nombre'" .
            "  where Id = $Id";
             echo $consulta;
        if (mysqli_query($conecta, $consulta)) {
            $pagina = urlParams("Categories/categorias.html", array("notificacion" => "Guardado con exito"));
            header("Location:../" . $pagina);
        } else {
            echo "Error: " . $consulta . "<br>" . mysqli_error($conn) . $contra;
        }

?>