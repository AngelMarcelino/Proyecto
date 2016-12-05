<?php
include("utils.php");
session_start();
$logueado =false;
$pagina = "NoLogueado/iniciarSesion.php";
if(isset($_GET["pagina"])){
    if($_GET["pagina"] != "")
    {
        $pagina = $_GET["pagina"];
    }
}
if(isset($_SESSION["usuario"]))
{
    if(!(strpos($pagina, 'NavBar') !== false))
    {
        $logueado = true;
        if($_SESSION["usuario"]["IdNivel"]==2)
        {
            if(isset($_GET["notificacion"]))
            {
                header("Location: usuarios/index.php?notificacion=" . $_GET["notificacion"]);
            }
            else{
                header("Location: usuarios/index.php");

            }
            
        }
        else{
            if(isset($_GET["notificacion"]))
            {
                header("Location: administradores/index.php?notificacion=" . $_GET["notificacion"]);
            }
            else{
                 header("Location: administradores/index.php");

            }
        }
    }
    
}
?>
<html>
<head>
<?php
include("links.html");

?> 

</head>
<body>
    <?php include("nav.html");?>
    <div class="container-fluid">
        <div class="row">
            <?php include($pagina);?>
        </div>
    </div>
    
    <?php
    include("footer.html");
    include("scripts.html");
    ?>
</body>
</html>