<?php

include ("sidebar-user.html");
include ("getOtherArticles.php");

$consulta = "select * from Categorias";
$categorias = ejecutaMuchosResultados($consulta);

?>
<script>
    function filtrar()
    {
        var value = $("#select-categoria").val();
        if(value != 0)
            window.location = getUrl()+"/usuarios/index.php?pagina=Catalog/catalogo.php&categoria=" + value;
            else{
                window.location =getUrl() + "/usuarios/index.php?pagina=Catalog/catalogo.php";
                
            }
    }

    function goToArticle(e, Id)
    {

        window.location = getUrl()+"/usuarios/index.php?pagina=Catalog/vistaArticulo.php&articulo=" + Id;

        
    }
</script>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h2 class="placeholder">Articulos</h2>
        <div class="row">
            <label class = "col-md-2" for="">Categoria<?php echo $categoria ?></label>
            <div class="col-md-4">
                <select id="select-categoria" name="IdCategoria" required class="form-control">
                    <option value = "0">Todas...</option>
                    <?php
                        for($a = 0; $a < count($categorias); $a ++)
                        {
                            $cat = $categorias[$a];
                            echo '<option value="' . $cat["Id"] . '">' . $cat["Nombre"] . '</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="col-md 2">
                <button onclick="filtrar()" class="btn btn-default">Filtrar</button>
            </div>
        </div>
        <div class="row top-row">
            <?php
            for($a = 0; $a < count($articulos); $a ++)
            {
                $art = $articulos[$a];
                $content = 
                '<div class="col-lg-3 col-md-4 col-sm-6 top-row catalogo-item">'.
                    '<div class="thumbnail">'.
                        '<img src="../' . $art["Foto"] . '" alt="...">'.
                        '<div class="caption">'.
                            '<h3>' .$art["Nombre"] . '</h3>' . '<h4 class="price">$'. $art["PrecioVenta"] . ' MXN</h4>'
                            .'<span class="categoria">'.$art["Categoria"] .  '</span><hr/>' . 
                            '<p>'. $art["Descripcion"] .'</p>'.
                            '<p>'. 
                                '<a onclick="goToArticle(event,'. $art["Id"] .')" href="#" class="btn btn-primary col-md-offset-9 col-lg-offset-10 col-sm-offset-8" role="button">Ver</a>'.
                            '</p>'.
                        '</div>'.
                    '</div>'.
                '</div>';
                echo $content;
            }
            ?>
            
            
        </div>
</div>