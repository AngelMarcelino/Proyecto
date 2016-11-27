<?php
include("utils.php");
session_start();
if(isset($_SESSION["usuario"]))
{
    if($_SESSION["usuario"]["IdNivel"]==2)
    {
        header("Location: usuarios/index.php");
    }
    else{
        header("Location: administradores/index.php");

    }
}
?>
<html>
<head>
<?php
include("links.html");
$pagina = "NoLogueado/inicio.php";
if(isset($_GET["pagina"])){
    if($_GET["pagina"] != "")
    {
        $pagina = $_GET["pagina"];
    }
}
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