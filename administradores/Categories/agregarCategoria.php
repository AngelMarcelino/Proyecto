<?php
include("sidebar-admin.html");
?>
<script>
    var x = $("")
</script>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<h2 class="placeholder">Agregar categoria</h2>
        <form action="Categories/addCategory.php" method="post" enctype="multipart/form-data">
			<div class="row top-row">
				<div class="form-group">
					<label class="col-md-2">Nombre</label>
					<div class="col-md-4">
						<input type="text" name="Nombre" required value="" class="form-control" />

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