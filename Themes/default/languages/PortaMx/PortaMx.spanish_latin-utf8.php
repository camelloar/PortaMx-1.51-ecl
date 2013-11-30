<?php
/** 
* @file PortaMx.spanish_es-utf8.php
* Language file PortaMx.spanish_es-utf8
*
* @author PortaMx - Portal Management Extension
* @author Copyright 2008-2010 by PortaMx - http://portamx.com
* @Version: 0.990
* @Date: 05.03.2010
*/

$txt['forum'] = 'Foro';
$txt['pmx_expand'] = 'Expandir ';
$txt['pmx_collapse'] = 'Contraer ';
$txt['pmx_hidepanel'] = 'Ocultar ';
$txt['pmx_showpanel'] = 'Mostrar ';
$txt['pmx_ec_block'] = ' bloque';

$txt['pmx_expand_index'] = 'Expandir';
$txt['pmx_show_index'] = 'Mostrar';

// do not change the array keys !
$txt['pmx_block_panels'] = array(
	'head' => 'Panel de cabecera',
	'top' => 'Panel superior',
	'left' => 'Panel izquierdo',
	'right' => 'Panel derecho', 
	'bottom' => 'Panel inferior',
	'foot' => 'Panel de pie',
	'pages' => 'Páginas',
);

// do not change the array keys !
$txt['pmx_block_sides'] = array(
	'head' => 'Cabecera',
	'top' => 'Superior',
	'left' => 'Izquierda',
	'right' => 'Derecha', 
	'bottom' => 'Inferior',
	'foot' => 'Pie',
	'front' => 'Principal',
	'pages' => 'Páginas',
);

// Admin and dropdown menue
$txt['pmx_admincenter'] = 'Centro de Administración PortaMx';
$txt['pmx_settings'] = 'Gestor de Configuración';
$txt['pmx_blocks'] = 'Gestor de Bloques';
$txt['pmx_adm_settings'] = 'Gestor de Configuración PortaMx';
$txt['pmx_adm_blocks'] = 'Gestor de Bloques PortaMx';
$txt['permissionname_manage_portamx'] = 'Moderar el Gestor de Bloques PortaMx';
$txt['permissionhelp_manage_portamx'] = 'Con este permiso cualquier miembro de este grupo puede acceder a la moderación del Gestor de Bloques PortaMx.';

// html teaser
$txt['pmx_readmore'] = '<b>Leer el artículo completo</b>';
$txt['pmx_readclose'] = '<b>Contraer el artículo</b>';

// HighSlide JS
$txt['pmx_hs_read'] = 'Clic para leer el mensaje completo';
$txt['pmx_hs_expand'] = 'Clic para agrandar';
$txt['pmx_hs_caption'] = '<a href=\'http://highslide.com/\'>Powered by <i>Highslide JS</i></a>, implemented by PortaMx corp.';

$txt['feed_response_error'] = "fsockopen(%s) ha fallado.\nError: Tiempo sin respuesta (%s segundos).";
$txt['download'] = 'Descarga';
$txt['page_reqerror_title'] = 'Error de solicitud de Página';
$txt['page_reqerror_msg'] = 'La Página solicitada no existe.';
$txt['page_reqerror_button'] = 'Volver';

$txt['download_error_title'] = 'Error de descarga';
$txt['download_acces_error'] = 'No tienes permisos suficientes para continuar la descarga solicitada.';
$txt['download_notfound_error'] = 'La descarga solicitada no está disponible y no puede continuar.';
$txt['download_unknown_error'] = 'Petición ilegal, la descarga no puede continuar.';

// added 0.971
$txt['cachestats'] = array(
	'mode' => 'Modo:', 
	'hits' => ', Visitas:', 
	'fails' => ', Erroneas:', 
	'cleans' => ', Limpias:', 
	'loaded' => ', Cargado:', 
	'saved' => ', Guardado:', 
	'time' => ', Hora:'
);
$txt['cachevals'][0] = array(
	'mode' => 'memory',
	'hits' => 0,
	'fails' => 0,
	'cleans' => 0, 
	'loaded' => 0, 
	'saved' => 0, 
	'time' => 0
);
$txt['cachevals'][1] = array(
	'mode' => 'desactivada'
);
$txt['cache_status'] = 'PortaMx-cache[ ';
$txt['cachefile'] = 'archivo';
$txt['cacheseconds'] = ' segundos';
$txt['cachekb'] = ' kb';
?>
