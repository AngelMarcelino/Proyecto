<?php
include("Categories/getCategory.php");
include("sidebar-admin.html");
?>
<script>
    var x = $("")
</script>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<h2 class="placeholder">Editar categoria</h2>
        <form action="Categories/editCategory.php" method="post" enctype="multipart/form-data">
			<div class="row top-row">
				<div class="form-group">
					<label class="col-md-2">Nombre</label>
					<div class="col-md-4">
						<input type="text" name="Nombre" required value="<?php echo $categoria['Nombre'] ?>" class="form-control" />

					</div>
				</div>
			</div>
			<div class="row top-row">
				<div class="col-md-3">
					<input class="btn btn-primary btn-lg" type="submit" value="Guardar"/>
				</div>
			</div>
			<input type="hidden" name="Id" value= "<?php echo $categoria["Id"] ?>" required" name="Id" />
		</form>
        
    </div>