<?php
include("../utils.php");
?>
<html>
<head>
    
<?php
include("links.html");
include("scripts.html");
session_start();
$logueado = false;
if(!isset($_SESSION["usuario"]))
{
    global $logueado;
    $loguado = true;
    echo "ddd";
    header("Location: ../index.php");

}
$pagina = "inicio.php";
if(isset($_GET["pagina"])){
    if($_GET["pagina"] != "")
    {
        $pagina = $_GET["pagina"];
    }
}
?> 

</head>
<body>
    <?php include("../nav.html");?>
    <div class="container-fluid">
        <div class="row">
            <?php include($pagina);?>
        </div>
    </div>
    
    <?php
    include("../footer.html");
    
    ?>
    
</body>
</html>