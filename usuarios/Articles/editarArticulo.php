<?php
include("Articles/getArticle.php");
include("sidebar-user.html");

?>
<script>
    var x = $("")
</script>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<h2 class="placeholder">Editar articulo</h2>
        <img class="image-medium" src="../<?php echo $articulo['Foto'] ?>">
        <form action="Articles/editArticle.php" method="post" enctype="multipart/form-data">
			<div class="row top-row">
				<div class="form-group">
					<label class="col-md-2">Nombre</label>
					<div class="col-md-4">
						<input type="text" value="<?php echo $articulo["Nombre"] ?>" required name="Nombre" class="form-control" />

					</div>

					<label class="col-md-2">Categoria</label>
					<div class="col-md-4">
						<select name="IdCategoria"  required class="form-control">
							<?php
								for($a = 0; $a < count($categorias); $a ++)
								{
									$cat = $categorias[$a];
									$option = '<option value="'. $cat["Id"] . '"';
									if ($cat["Id"] == $articulo["IdCategoria"])
									{
										$option = $option . ' selected ';
									}
									echo  $option . '>' . $cat["Nombre"] . '</option>';
								}
								
							?>
						</select>
					</div>
				</div>
			</div>
			<div class="row top-row">
				<div class="form-group">
					<label class="col-md-2">Descripci&oacute;n</label>
					<div class="col-md-10">
						<textarea name="Descripcion" required class="form-control"><?php echo $articulo["Descripcion"] ?> </textarea>
					</div>
				</div>
			</div>
			<div class="row top-row">
				<div class="form-group">
					<label class="col-md-2">Precio venta</label>
					<div class="col-md-4">
						<input type="text" required pattern="^\d+(\.\d+)?$" value="<?php echo $articulo["PrecioVenta"] ?>" name="PrecioVenta"  class="form-control"/>

					</div>
					<label class="col-md-2">Cantidad</label>
					<div class="col-md-4">
						<input type="text" name="Cantidad" required value="<?php echo $articulo["Cantidad"] ?>" pattern="^\d+$" class="form-control" />

					</div>
				</div>
			</div>
			<div class="row top-row">
				<div class="form-group">
					<label class="col-md-2">Foto</label>
					<div class="col-md-4">
						<input type="file" name="Foto" name="Nombre" />
						<input type="hidden" name="Id" value="<?php echo $articulo["Id"] ?>" />
					</div>
				</div>
				
			</div>
			<div class="row top-row">
				<div class="col-md-3">
					<input class="btn btn-primary btn-lg" type="submit" value="Guardar cambios"/>
				</div>
			</div>
		</form>
        
    </div>