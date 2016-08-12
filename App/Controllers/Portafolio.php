<?php
namespace App\Controllers;
defined("APPPATH") OR die("Access denied");

use \Core\View,
    \App\Models\Portafolio\Portafolio as portafolioModels,
    \Core\Controller;

/**
 *
 */
class Portafolio extends Controller
{

  function index(){

    $portafolio = portafolioModels::getAll();



  }
}
