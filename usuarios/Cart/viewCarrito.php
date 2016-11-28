<?php include("sidebar-user.html");
include ("getCartArticles.php");
?>
<script>
        function deleteCartItem(e, Id)
        {
                window.location = getUrl() + "/usuarios/Cart/deleteCartItem.php?CartItem=" + Id;
        }
</script>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h2 class="placeholder">Carrito</h2>
            <div class="row"
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th class="text-center">Precio</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for($a = 0; $a < count($articulosCarrito); $a++)
                    {
                            $art = $articulosCarrito[$a];
                            if(isset($art["CartItemId"]))
                                include("Cart/cartTemplate.html");
                    } 
                        ?>
                    
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Subtotal</h5></td>
                        <td class="text-right"><h5><strong>$<?php echo $total["Total"]?></strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Envío</h5></td>
                        <td class="text-right"><h5><strong>$0.00</strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong>$<?php echo $total["Total"]?></strong></h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        <button type="button" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                        </button></td>
                        <td>
                        <button type="button" class="btn btn-success">
                            Checkout <span class="glyphicon glyphicon-play"></span>
                        </button></td>
                    </tr>
                </tbody>
            </table>
        </div>

</div>
</div>