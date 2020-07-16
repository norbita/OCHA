<?php
function busca_titulo ($noticia){
	$i = 0;
	$divClass = $titulo = '';
	foreach($noticia->find(".title") as $divClass) {
		//titulo
		foreach($divClass->find('">') as $titulo ) {
			$resultado[$i] = $titulo->plaintext; 
			$i++;
		}
	}
	return $resultado;
}

function busca_fuente ($noticia){
	$i = 0;
	$divClass = $fuente = '';
	foreach($noticia->find('dd.source') as $divClass) {
			$resultado[$i] = $divClass->plaintext; 
			$i++;
	}
	return $resultado;
}

function busca_fecha($noticia){
	$i = 0;
	$divClass = $fecha = '';
	foreach($noticia->find(".date") as $divClass) {
		if (validaFecha($divClass->plaintext)){
			$resultado[$i] = $divClass->plaintext; 
			$i++;
		}
		
	}
	return $resultado;
}

function validaFecha($date)
{
	$timestamp = strtotime($date);
	return $timestamp ? $date : null;
}


function output_message ($mensaje=""){
	if (!empty($mensaje)) {
		return "<p class=\"mensaje\">{$mensaje}</p>";
	} else {
		return "";
	}
}


function include_layout_template($template=""){
	include("../formatos/".$template);
}

function pre($arreglo) {
	echo '<pre>'; print_r($arreglo); echo '</pre>';
}
		
?>