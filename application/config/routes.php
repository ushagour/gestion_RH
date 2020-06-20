<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Dashbord';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//controller dashbord 
$route['home'] = 'Dashbord/index';

$route['ajouter'] = 'Dashbord/ajouter_personnel';//loader dyal page ajouter 
$route['add'] = 'Dashbord/add';//evenement add 
$route['update'] = 'Dashbord/update';//evenement modifier 
$route['check/(:any)/(:any)'] = 'Dashbord/check/$1/$2';//evenement check 

$route['affichage'] = 'Dashbord/affichage_personnel';//loader dyal page affichage 



$route['print-etat'] = 'Dashbord/print_etat';//loader dyal page affichage 
$route['check-all'] = 'Dashbord/check_all';//check-all perssonel to ptint them


$route['generateFPDF/(:any)'] = 'Dashbord/generateFPDF/$1';//loader dyal generate pdf dyal koola personnel

$route['delete-personnel/(:any)'] = 'Dashbord/delete/$1';//event dyl supprition 
$route['edit_personnel/(:any)'] = 'Dashbord/edit_personnel/$1';// page dyal modification 



$route['search'] = 'Dashbord/SearchPersonnel';// page dyal recherch 






//Users ***************************************************************************************************************
$route['login'] = 'User/login'; 														// Login Page and function 
$route['Detail_user'] = 'User/Detail_user'; 														// page dyal detail dyal luser 
$route['Nouveau-Utilisateur'] = 'User/Ajouter_user'; 														// page dyal detail dyal luser 
$route['add_user'] = 'User/Add_user'; 														// page dyal detail dyal luser 
$route['Edit_user'] = 'User/Edit_user'; 														// page dyal modification dyal luser 
$route['update_user'] = 'User/update'; 														// evenement  dyal modification dyal luser 
$route['logout'] = 'User/logout'; 														// logout 


// $route['search'] = 'dashbord/search';
// $route['editionEtat/(:num)'] = 'dashbord/editionEtat/$1';
