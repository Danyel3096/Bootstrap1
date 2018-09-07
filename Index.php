<?php
include_once 'App/Configuracion.php';

$componentes_url = parse_url($_SERVER['REQUEST_URI']);
$ruta = $componentes_url['path'];
$partes_ruta = explode('/', $ruta);
$partes_ruta = array_filter($partes_ruta);
$partes_ruta = array_slice($partes_ruta, 0);
$ruta_elegida = 'Vistas/404.php';

if($partes_ruta[0] == 'MR_D_Online') {
	if(count($partes_ruta) == 1) {
		$ruta_elegida = 'Vistas/Home.php';
	} else if(count($partes_ruta) == 2) {
		switch ($partes_ruta[1]) {
			case 'Otaku':$ruta_elegida = 'Vistas/Otaku.php';
				break;
			case 'Estudio':$ruta_elegida = 'Vistas/Estudio.php';
				break;
			case 'Catolicismo':$ruta_elegida = 'Vistas/Catolicismo.php';
				break;
		}
	}
}

include_once $ruta_elegida;
?>