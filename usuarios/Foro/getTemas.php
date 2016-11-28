<?php
    include("../inc/conectai.php");
    $consulta = "select Temas.Id as TemaId, Temas.Nombre as NombreTema, Contenido, Usuarios.Nombre as NombreUsuario," . 
            " CategoriaTemas.Nombre as Categoria, FechaCreacion, Usuarios.Foto as Foto ".
            " from Temas inner join Usuarios on Temas.IdUsuario = Usuarios.Id".
			" inner join CategoriaTemas on Temas.IdCategoria = CategoriaTemas.Id";
    $temas = ejecutaMuchosResultados($consulta);  
?>