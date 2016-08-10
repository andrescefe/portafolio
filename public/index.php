<?php
if(!isset($_SESSION)) {
    session_start();
}

error_reporting(E_ALL);
ini_set('display_errors', 1);

//directorio del proyecto
define("PROJECTPATH", dirname(__DIR__));

//directorio app
define("APPPATH", PROJECTPATH . '/App');

define('PROJECT','catalogo');


// require __DIR__ . '/../vendor/autoload.php';

//autoload con namespaces
function autoload_classes($class_name)
{
    $filename = PROJECTPATH . '/' . str_replace('\\', '/', $class_name) .'.php';
    // echo $filename;
    if(is_file($filename))
    {
        include_once $filename;
    }
}
//registramos el autoload autoload_classes
spl_autoload_register('autoload_classes');

//se llama al layoute que es el que hara el render de la aplicacion
require_once '/../App/Views/Layoute.php';

$layou = new Layoute();
$layou->home();
