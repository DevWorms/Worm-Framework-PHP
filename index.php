<?php

include 'App/route.php';

$route = new Route();

	//	EJEMPLO PARA LLAMAR RUTAS CON URL LIMPIA 
	$route->add('/nombre_ejemplo', 'controladores/carpeta_destino/archivo_a_cargar.php');

	/*
		UNA VEZ CAMBIADO ESTE PUNTO, LA URL SE MOSTRARÁ ASÍ

			miaplicacion.com/nombre_ejemplo

		EN LUGAR DE
	
			miaplicacion.com/archivo_a_cargar.php

		LO QUE PERMITIRÁ UNA URL LIMPIA Y ENTENDIBLE
	*/

$route->submit();