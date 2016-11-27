<?php
function nombreAplicacion()
{
    return "Super Market";
}

function url($pagina)
{
    return "index.php?pagina=$pagina";
}

function urlParams($pagina, $params)
{
    $stringParam = "";
    foreach ($params as $clave => $valor) {
        $stringParam = $stringParam . "&" . $clave . "=" . $valor;
    }
    return "index.php?pagina=$pagina" . $stringParam;
}

function quitaCarpetaPadre($path)
{
    $x = 0;
    if ($path[0] == '.' && $path[1] == '.' && $path[2] == '/') {
        $path = substr($path, 3);
        $path = quitaCarpetaPadre($path);
    }
    return $path;
}
?>