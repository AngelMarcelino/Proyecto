<?php
function nombreAplicacion(){
    return "Super Market";
}


function url($pagina, $params){
    $stringParam = "";
    foreach($params as $clave=> $valor)
    {
        $stringParam += "&" . $clave . "=" . $valor;
    }
    return "index.php?pagina=$pagina" . $stringParam;
}

?>