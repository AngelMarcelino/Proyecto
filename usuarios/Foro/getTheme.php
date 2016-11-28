<?php
include("../inc/conectai.php");
$idTema = $_GET["tema"];
$consulta = "select Temas.Nombre as NombreTema, Contenido, Usuarios.Nombre as NombreUsuario," . 
            " CategoriaTemas.Nombre as Categoria, FechaCreacion".
            " from Temas inner join Usuarios on Temas.IdUsuario = Usuarios.Id".
			" inner join CategoriaTemas on Temas.IdCategoria = CategoriaTemas.Id where Temas.Id = " . $idTema;
$tema = ejecutaUnResultado($consulta);
?>