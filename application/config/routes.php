<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
//home//
$route['Home'] = 'Welcome/Home';
$route['Terminos'] = 'Welcome/Terminos';
$route['contacto'] = 'Welcome/contacto';
$route['Comercio'] = 'Welcome/Comercio';
$route['Nosotros'] = 'Welcome/Nosotros';
$route['Catalogo'] = 'Welcome/Catalogo';
$route['registro'] = 'Welcome/registro';
$route['consultas'] ='Welcome/consulta';

$route['login']= 'Welcome/login';
$route['verifico_nuevoregistro']='back/registro_controller';

//Login//
$route['login'] = 'Welcome/login';
$route['verifico_usuario']= 'back/login_controller';
$route['logout'] = 'Welcome/logout';
$route['panel'] = 'Welcome/us_logueado';


//Productos//
$route['verifico_nuevoproducto'] = 'back/producto_controller/agrega_producto';
$route['verifico_modificaproducto/(:num)'] = 'back/producto_controller/modificar_producto';

$route['muestraproducto'] = 'back/producto_controller';
$route['muestraremeras'] = 'back/producto_controller/muestra_remeras';
$route['muestragorras'] = 'back/producto_controller/muestra_gorras';
$route['muestratodo'] = 'back/producto_controller/muestraproductos';
$route['productos_eliminados'] = 'back/producto_controller/muestra_eliminados';

$route['productos_agrega'] = 'back/producto_controller/form_agrega_producto';

$route['productos_modifica/(:num)'] = 'back/producto_controller/modificar_producto/$1';
$route['productos_elimina/(:num)'] = 'back/producto_controller/eliminar_producto/$1';
$route['productos_activa/(:num)'] = 'back/producto_controller/activar_producto/$1';

//Carrito//
$route['todo'] = 'back/carrito_controller/todo';
$route['remera'] = 'back/carrito_controller/remera';
$route['gorra'] = 'back/carrito_controller/gorra';
$route['carrito_agrega'] = 'back/carrito_controller/add';
$route['carrito_actualiza'] = 'back/carrito_controller/actualiza_carrito';
$route['carrito_elimina/(:any)'] = 'back/carrito_controller/remove/$1';
$route['comprar'] = 'back/carrito_controller/muestra_compra';
$route['confirma_compra'] = 'back/carrito_controller/guarda_compra';
$route['carrito'] = 'back/carrito/carritoparte_view';


//Consulta//
$route['consulta'] = 'back/consulta_controller';
$route['panel_consulta']= 'back/consulta_controller/consultas';


//usuarios//
$route['usuarios'] = 'back/usuario_controller/usuarios';



$route['usuarios_modifica/(:num)'] = 'back/usuario_controller/modificar_usuario/$1';
$route['usuarios_elimina/(:num)'] = 'back/usuario_controller/eliminar_usuario/$1';
$route['usuarios_eliminados'] = 'back/usuario_controller/muestra_eliminados';
