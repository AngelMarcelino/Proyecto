<?php
include("sidebar-user.html");
include("Foro/getTheme.php");
?>


<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="jumbotron">
        <h1><?php echo $tema["NombreTema"]; ?></h1>
        <span><?php echo $tema["NombreUsuario"] . " - " . $tema["FechaCreacion"];  ?></span>
        <p><?php echo $tema["Contenido"]?></p>
        <hr/>
        <?php
            for($a = 0; $a < count($comentarios); $a ++)
            {
                $comentario = $comentarios[$a];
                include("Foro/comentarioTemplate.php");
            }
        ?>
        <form action="Foro/newCommentary.php" method="post" enctype="multipart/form-data">
               
                <div class="row top-row">
                    <div class="form-group">
                        <label class="col-md-2">Comentario</label>
                        <div class="col-md-10">
                            <textarea name="Comentario" required class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="url" id="returnUrl"/>
                <input type="hidden" name="IdTema" value="<?php echo $tema["IdTema"] ?>" id="returnUrl"/>
            <p><input type="submit" class="btn btn-primary btn-lg" value="Listo"/></p>
            </form>
        </div>

        <script>
    $("#returnUrl").val(window.location.href);
</script>
</div>