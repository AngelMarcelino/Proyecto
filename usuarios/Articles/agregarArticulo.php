<?php

include ("sidebar-user.html");
include ("../inc/conectai.php");

$consulta = "select * from Categorias";
$categorias = ejecutaMuchosResultados($consulta);
?>
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<div class="jumbotron">
			<h1>Agregar un nuevo articulo</h1>
			<p></p>
			<form action="Articles/addArticle.php" method="post" enctype="multipart/form-data">
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
					<label class="col-md-2">Descripci&oacute;n</label>
					<div class="col-md-10">
						<textarea name="Descripcion" required class="form-control"></textarea>
					</div>
				</div>
			</div>
			<div class="row top-row">
				<div class="form-group">
					<label class="col-md-2">Precio venta</label>
					<div class="col-md-4">
						<input type="text" required pattern="^\d+(\.\d+)?$" name="PrecioVenta"  class="form-control"/>

					</div>
					<label class="col-md-2">Cantidad</label>
					<div class="col-md-4">
						<input type="text" name="Cantidad" required pattern="^\d+$" class="form-control" />

					</div>
				</div>
			</div>
			<div class="row top-row">
				<div class="form-group">
					<label class="col-md-2">Foto</label>
					<div class="col-md-4">
						<input type="file" name="Foto" name="Nombre" />

					</div>
				</div>
				
			</div>
			<div class="row top-row">
				<div class="col-md-3">
					<input class="btn btn-primary btn-lg" type="submit" value="Guardar"/>
				</div>
			</div>
		</form>
		</div>
		
	</div>