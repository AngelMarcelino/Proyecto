<?php
include("Users/getUser.php");
include("sidebar-admin.html");
?>
<script>
    var x = $("")
</script>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<h2 class="placeholder">Editar usuario</h2>
        <img class="image-medium" src="../<?php echo $usuario['Foto'] ?>">
        <form action="Users/editUser.php" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="form-group">
					<label class="col-md-2">Nombre</label>
					<div class="col-md-4">
						<input type="text" name="Nombre" required value="<?php echo $usuario['Nombre'] ?>" class="form-control" name="Nombre" />

					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2">Correo</label>
					<div class="col-md-4">
						<input type="email" name="Correo" required value="<?php echo $usuario['Correo'] ?>"  class="form-control" name="Nombre" />

					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<label class="col-md-2">Nombre de usuario</label>
					<div class="col-md-4">
						<input type="text" name="NombreUsuario" required value="<?php echo $usuario['NombreUsuario'] ?>"  class="form-control" name="Nombre" />

					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2">Contraseña</label>
					<div class="col-md-4">
						<input type="password" name="Contra" required    class="form-control" name="Nombre" />

					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<label class="col-md-2">Confirmar contraseña</label>
					<div class="col-md-4">
						<input type="password" name="ConfContra" required  class="form-control" name="Nombre" />

					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2">Colonia</label>
					<div class="col-md-4">
						<input type="text" name="Colonia" required value="<?php echo $usuario['Colonia'] ?>"  class="form-control" name="Nombre" />

					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<label class="col-md-2">Calle</label>
					<div class="col-md-4">
						<input type="text" name="Calle" required value="<?php echo $usuario['Calle'] ?>"  class="form-control" name="Nombre" />

					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2">Numero</label>
					<div class="col-md-4">
						<input type="text" name="Numero" required value="<?php echo $usuario['NInt'] ?>"  class="form-control" name="Nombre" />

					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<label class="col-md-2">Foto</label>
					<div class="col-md-4">
						<input type="file" name="Foto" required" name="Nombre" />
					</div>
				</div>
						<input type="hidden" name="Id" value= "<?php echo $usuario["Id"] ?>" required" name="Id" />
				
			</div>
			<div class="row top-row">
				<div class="col-md-3">
					<input class="btn btn-primary btn-lg" type="submit" value="Guardar"/>
				</div>
			</div>
		</form>
        
    </div>