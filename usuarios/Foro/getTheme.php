<?php
include("../inc/conectai.php");
$idTema = $_GET["tema"];
$consulta = "select Temas.Nombre as NombreTema, Temas.Id as IdTema, Contenido, Usuarios.Nombre as NombreUsuario," . 
            " CategoriaTemas.Nombre as Categoria, FechaCreacion".
            " from Temas inner join Usuarios on Temas.IdUsuario = Usuarios.Id".
			" inner join CategoriaTemas on Temas.IdCategoria = CategoriaTemas.Id where Temas.Id = " . $idTema;
$tema = ejecutaUnResultado($consulta);
$consulta = "select Contenido, U.Nombre as NombreUsuario, FechaCreacion from Comentarios as C inner join Usuarios as U on C.IdUsuario = U.Id where IdTema = " . $idTema;
$comentarios = ejecutaMuchosResultados($consulta);
?>