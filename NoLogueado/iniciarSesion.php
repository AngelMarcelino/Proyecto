<?php include("sidebar-nologin.html"); ?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h2 class="placeholder">Iniciar sesi&oacute;n</h2>
        <form action="NoLogueado/verificarUsuario.php" method="post">
            <div class="row">
                <label class="col-md-2" for="NombreUsuario">Nombre de usuario</label>
                <div class="col-md-4">
                    <input type="text" name="NombreUsuario" class="form-control" required/>
                </div>
                <label class="col-md-2" for="Contra">Contraseña</label>
                <div class="col-md-4">
                    <input type="password" name="Contra" class="form-control" required/>
                </div>
            </div>
            <div class="row top-row">
                <div class="col-md-3">
                    <input type="submit" class="btn btn-primary btn-lg" value="Ingresar"/>
                </div>
            </div
        </form>
    </h2>
</div>