<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "welcome";
$route['404_override'] = '';

/*acerca del proyecto */
$route['acerca_de'] = 'welcome/acerca_de';

/* administrador de usuarios */
$route['ge_administrador'] = 'administrador/index';
$route['gest-usuarios'] = 'administrador/admin_usuarios';
$route['b_listar_usuario'] = 'usuario/listar';
$route['registrar_usuario'] = 'administrador/registrar_usuario';
$route['admin_coo'] = 'administrador/admin_coordinadores';
$route['traer_usuarios'] = 'administrador/ver_usuarios';
$route['registrar_datos_usuario'] = 'administrador/registrar_datos_usuario';
$route['get_info_user'] = 'usuario/get_info_user';
$route['actualizar_datos_usuario'] = 'administrador/actualizar_datos_usuario';
$route['def_coordinador'] = 'administrador/def_coordinador';
$route['deshab_coordinador'] = 'administrador/deshab_coordinador';

/*gestion de usuarios*/
$route['login'] = 'usuario/login_attempt';
$route['logout'] = 'usuario/log_out';
$route['dashboard'] = 'welcome/dashboard';
$route['registro_form'] = 'welcome/registro';
$route['registro_user'] = 'usuario/insertar_usuario';
$route['completar_datos'] = 'usuario/completar_datos';
$route['completar_datos_usuario'] = 'usuario/completar_datos_usuario';

/* routing for proyecto controller__*/
$route['gest-proyecto']="proyecto/index";
$route['insertar_proyecto']="proyecto/inscribir";
$route['consultar_proyecto']="proyecto/modificar";

$route['registrar_proyecto']="proyecto/registrar";
$route['buscar_proyecto']="proyecto/buscar";
$route['listar_datos_proyecto']="proyecto/ver_proyectos";
$route['generar_reporte_proyecto']="proyecto/generar_reporte";

/* routing for prestadores controller */
$route['gest-prestador']="prestador/index";
$route['insertar_prestador']="prestador/insertar";
$route['consultar_prestador']="prestador/consultar";
$route['asignar_proyecto']="prestador/asignar_pro";
$route['consultar_datos_prestador']="prestador/ver_datos_personales";
$route['insertar_datos_prestador']="prestador/insertar_datos_prestador";
$route['listar_p_x_proy']="prestador/listar_x_proyecto";
$route['b_listar_prestadores']="prestador/listar_prestador";
$route['b_proyecto_prestador']= "prestador/consultar_proyectos_inscritos";
$route['ver_detalles_proyecto']="prestador/verdetalles";
$route['consultar_nombres_proyectos']="prestador/consultar_nombre_proyecto";
$route['consultar_datos_asesor']="prestador/ver_datos_asesor";
$route['consultar_datos_proyecto']="prestador/verificar_proyecto";
$route['insertar_asesor']="prestador/insertar_asesor";
$route['asociar']="prestador/asociar_proyecto";
$route['horario_trabajo'] = "prestador/horario_trabajo";
$route['insertar_datos_reportar_horas']="prestador/insertar_datos_reportar_horas";
$route['datos_horas_insertadas'] = "prestador/datos_horas_insertadas";
/* routing for localidades controller */
$route['gest-localidad']="localidad/index";
$route['listar_loc']="localidad/listar";
$route['insertar_localidad']="localidad/insertar";
$route['consultar_localidad']="localidad/consultar";
$route['insertar_datos_localidad']="localidad/insertar_datos_localidad";
$route['consultar_datos_localidad']="localidad/ver_datos_localidad";

$route['ver_reporte'] = 'reportes/index';


/* End of file routes.php */
/* Location: ./application/config/routes.php */
