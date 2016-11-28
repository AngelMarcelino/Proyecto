

<div style="margin-bottom: 20px;" class="media">
    <div class="media-left media-middle">
        <a href="#"> 
            <img class="media-object" src="../<?php echo $tem["Foto"] ?>" alt="...">
        </a> 
    </div> 
    <div class="media-body"> 
        <h3 class="media-heading"><strong>Titulo: </strong><?php echo $tem["NombreTema"] ?></h3>
        <h4 class="media-heading"><strong>Creador: </strong><?php echo $tem["NombreUsuario"] ?></h4>
        <p><?php echo $tem["Contenido"] ?></p> 
        <p><strong>Fecha: </strong><?php echo $tem["FechaCreacion"] ?></p> 
        <p><a href="<?php echo url("Foro/viewTema.php") . "&tema=" . $tem["TemaId"] ?>" class="btn btn-primary">Ir</a></p>
    </div>
    
</div>