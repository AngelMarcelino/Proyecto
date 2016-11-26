<?php
include("utils.php");
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