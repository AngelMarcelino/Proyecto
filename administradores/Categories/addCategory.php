<?php
include("../../inc/conectai.php");
include("../../utils.php");

$nombre = $_POST["Nombre"];


    $consulta = "insert into Categorias (Nombre) values" .
            " ('$nombre')";
             echo $consulta;
        if (mysqli_query($conecta, $consulta)) {
            $pagina = urlParams("Categories/categorias.html", array("notificacion" => "Guardado con exito"));
            header("Location:../" . $pagina);
        } else {
            echo "Error: " . $consulta . "<br>" . mysqli_error($conn) . $contra;
        }

?>