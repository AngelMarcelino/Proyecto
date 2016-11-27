<?php

include ("sidebar-user.html");
include ("getArticle.php");

$consulta = "select * from Categorias";
$categorias = ejecutaMuchosResultados($consulta);

?>
<script>
    function carritoDeCompras()
    {
        window.location = window.location.href.replace("Catalog/vistaArticulo.php", "carritoCompras") + "&cantidad";
    }
</script>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

        <div class="row">	
            <div class="col-md-5">
                <div class="product col-md-12 service-image-left">
                
                    <center>
                        <img id="item-display" src="../<?php echo $articulo["Foto"]?>" alt=""></img>
                    </center>
                </div>
            </div>
                
            <div class="col-md-7">
                <div class="product-title"><?php echo $articulo["Nombre"]?></div>
                <div class="product-desc"><?php echo $articulo["Categoria"]?></div>
                <div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>
                <hr>
                <div class="product-price">$ <?php echo $articulo["PrecioVenta"]?></div>
                <?php
                    if(intval($articulo["Cantidad"]) > 0)
                    {
                        echo '<div class="product-stock">En existencia</div>';
                    }
                    else{
                        echo '<div class="product-nostock">Agotado</div>';
                    }
                ?>
                <hr>
                <div class="btn-group cart">
                    <input/>
                    <button type="button" class="btn btn-success">
                        Agregar al carrito
                    </button>
                </div>
                <!--<div class="btn-group wishlist">
                    <button type="button" class="btn btn-danger">
                        Add to wishlist 
                    </button>
                </div>-->
            </div>
        </div> 

		<div class="row top-row">		
			<div class="col-md-12 product-info">
					<ul id="myTab" class="nav nav-tabs nav_tabs">
						
						<li class="active"><a href="#service-one" data-toggle="tab">DESCRIPCION</a></li>
						<!--<li><a href="#service-two" data-toggle="tab">PRODUCT INFO</a></li>
						<li><a href="#service-three" data-toggle="tab">REVIEWS</a></li>-->
						
					</ul>
				<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade in active" id="service-one">
						 
							<section class="product-info">
								<?php echo $articulo["Descripcion"]?>

							</section>
										  
						</div>
					<!--<div class="tab-pane fade" id="service-two">
						
						<section class="container">
								
						</section>
						
					</div>
					<div class="tab-pane fade" id="service-three">
												
					</div>-->
				</div>
				<hr>
			</div>
		</div>


</div>