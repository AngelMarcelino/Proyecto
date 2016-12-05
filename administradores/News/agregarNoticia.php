<?php include("sidebar-admin.html")?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="jumbotron">
        <h1>Nueva noticia</h1>

        <form action="News/addNew.php" method="post" enctype="multipart/form-data">
            <div class="row top-row">
                <div class="form-group">
                    <label class="col-md-2">T&iacute;tulo</label>
                    <div class="col-md-10">
                        <input name="Titulo" required class="form-control"/>
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
            <div class="row top-row">
                <div class="form-group">
                    <label class="col-md-2">Imagen</label>
                    <div class="col-md-10">
                        <input name="Imagen" type="file" required/>
                    </div>
                </div>
            </div>
            <div class="row top-row">
                <div class="form-group">
                    <div class="col-md-10">
            <p><input type="submit" class="btn btn-primary btn-lg" value="Listo" /></p>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>