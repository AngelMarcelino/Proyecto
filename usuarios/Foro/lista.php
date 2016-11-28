<?php
include("getTemas.php");
include("sidebar-user.html")
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="jumbotron">
        <h1>Foro</h1>
        <p>Comparte, pregunta, debate en nuestro foro</p>
        <p><a href="<?php echo url("Foro/nuevoTema.php") ?>" class="btn btn-primary btn-lg">Nuevo tema</a></p>
    </div>
    
    <?php
        for($a = 0; $a < count($temas); $a ++)
        {
            $tem = $temas[$a];
            if(isset($tem["NombreTema"]))
                include("Foro/temaTemplate.php");
        }
    ?>
</div>