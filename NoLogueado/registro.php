<?php

include ("sidebar-nologin.html");
?>
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<h2 class="placeholder">Registro</h2>

		<form action="NoLogueado/registroScript.php" method="POST" enctype="multipart/form-data">
			<div class="row top-row">
				<div class="form-group">
					<label class="col-md-2">Nombre</label>
					<div class="col-md-4">
						<input type="text" name="Nombre" class="form-control" />

					</div>

					<label class="col-md-2">Correo</label>
					<div class="col-md-4">
						<input type="email" name="Correo"  class="form-control" />

					</div>
				</div>
			</div>
			<div class="row top-row">
				<div class="form-group">
					<label class="col-md-2">Nombre de usuario</label>
					<div class="col-md-4">
						<input type="text" name="NombreUsuario"  class="form-control" />

					</div>

					<label class="col-md-2">Contraseña</label>
					<div class="col-md-4">
						<input type="password" name="Contra"  class="form-control" />

					</div>
				</div>
			</div>
			<div class="row top-row">
				<div class="form-group">
					<label class="col-md-2">Confirmar contraseña</label>
					<div class="col-md-4">
						<input type="password" name="ConfContra"  class="form-control" />

					</div>

					<label class="col-md-2">Colonia</label>
					<div class="col-md-4">
						<input type="text" name="Colonia"  class="form-control" />

					</div>
				</div>
			</div>
			<div class="row top-row">
				<div class="form-group">
					<label class="col-md-2">Calle</label>
					<div class="col-md-4">
						<input type="text" name="Calle"  class="form-control" />

					</div>

					<label class="col-md-2">Numero</label>
					<div class="col-md-4">
						<input type="text" name="Numero"  class="form-control" />

					</div>
				</div>
			</div>
			<div class="row top-row">
				<div class="form-group">
					<label class="col-md-2">Foto</label>
					<div class="col-md-4">
						<input required type="file" name="Foto" />

					</div>
				</div>
				
			</div>
			<div class="row top-row">
				<div class="col-md-3">
					<input class="btn btn-primary btn-lg" type="submit" value="Registrarse"/>
				</div>
			</div>
		</form>
	</div>