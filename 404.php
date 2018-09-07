<?php
$Titulo = 'Página no encontrada';
include_once 'Plantillas/InicioPagina.php';
include_once 'Plantillas/BarraNavegacion.php';

header($_SERVER['SERVER_PROTOCOL'] . "404 Not Found", true, 404);
echo 'LA  PAGINA NO EXISTE';

include_once 'Plantillas/CierrePagina.php';
?>