<?php

include 'App/route.php';

$route = new Route();


	//	RUTAS DE RECEPCIÓN
	$route->add('/citas', 'controladores/recepcion/recepcion.php');
	$route->add('/control', 'controladores/recepcion/registro.php');
	$route->add('/calendario', 'controladores/recepcion/calendario.php');
	$route->add('/admin', 'controladores/recepcion/pagos.php');
	$route->add('/primera_cita', 'controladores/recepcion/primera.php');
	$route->add('/pagos', 'controladores/recepcion/pagos.php');	
	$route->add('/paciente', 'controladores/recepcion/paciente.php');

	//	RUTAS DE FARMACIA
	$route->add('/orden_compra', 'controladores/farmacia/ordenes.php');
	$route->add('/catalogo', 'controladores/farmacia/catalogo-productos.php');	
	$route->add('/registrar_factura', 'controladores/farmacia/facturas.php');

	//	RUTAS DE ADMINISTRADOR
	$route->add('/usuarios', 'controladores/admin/usuarios.php');
	$route->add('/reporte_citas', 'controladores/admin/reportes.php');

	//	RUTAS DE MÉDICO


	//	OTRAS RUTAS
	$route->add('/', 'controladores/index.php');
	$route->add('/404', 'controladores/layouts/404.php');
	$route->add('/cerrar', 'controladores/sesion/cerrar_sesion.php');


	//	+++++++++++++++++	AÚN EN ESPERA...	++++++++++++++++++++++++
	$route->add('/pedidos', 'controladores/admin/pedidos-farmacia.php');
	$route->add('/directorio', 'controladores/farmacia/dir-telefonico.php');

$route->submit();