<?php
require_once "../public/simple_html_dom.php";
require_once("../public/funciones.php");

$data = file_get_html('https://reliefweb.int/country/ven', false);
$noticia = str_get_html($data);

//busqueda de datos
if(!empty($noticia)) {
    $titulos = busca_titulo($noticia);
    $fuente = busca_fuente($noticia);
    $fecha = busca_fecha($noticia);
}

include ('../vistas/lee_v.php'); 

$data->clear();
$noticia->clear();
unset($data);
unset($noticia);
exit;

?>