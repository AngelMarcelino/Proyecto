<?php
include("sidebar-user.html");
include("../inc/conectai.php");
?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="jumbotron">
        <h1>Agregar nuevo tema</h1>
        <p>De que tratará?</p>
    
        <form action="Foro/newTheme.php" method="post" enctype="multipart/form-data">
                <div class="row top-row">
                    <div class="form-group">
                        <label class="col-md-2">Nombre</label>
                        <div class="col-md-4">
                            <input type="text" required name="Nombre" class="form-control" />

                        </div>

                        <label class="col-md-2">Categoria</label>
                        <div class="col-md-4">
                            <select name="IdCategoria" required class="form-control">
                                <?php
                                $categorias = ejecutaMuchosResultados("select * from CategoriaTemas");
                                    for($a = 0; $a < count($categorias); $a ++)
                                    {
                                        $cat = $categorias[$a];
                                        echo '<option value="' . $cat["Id"] . '">' . $cat["Nombre"] . '</option>';
                                    }
                                    
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row top-row">
                    <div class="form-group">
                        <label class="col-md-2">Contenido</label>
                        <div class="col-md-10">
                            <textarea name="Contenido" required class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            <p><input type="submit" class="btn btn-primary btn-lg" value="Agregar"/></p>
            </form>
        </div>
</div>