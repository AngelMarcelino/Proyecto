<?php include("sidebar-nologin.html"); 

$cont = 0;
$file = true;
    echo '<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">';

while(file_exists("files/Noticias/Noticia" . $cont . ".txt"))
{
    echo '<div class="row - top-row"><div class="col-md-12">';
    if( $file = fopen("files/Noticias/Noticia" . $cont . ".txt", "r") or die ("Error"))
   
    echo fread($file, filesize("files/Noticias/Noticia" . $cont . ".txt"));
    $cont++;
    echo '</div></div>';
}




?>
