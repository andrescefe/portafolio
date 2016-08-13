<?php
namespace App\Controllers;
defined("APPPATH") OR die("Access denied");

use \Core\View,
    \App\Models\Login\Login as loginModel,
    \Core\Controller;
/**
 *
 */
class Login extends Controller
{

  function index(){
    View::set("isLogin", true);
    View::render("Login");
  }
}
