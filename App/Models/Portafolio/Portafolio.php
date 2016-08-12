<?php
namespace App\Models\Portafolio;
defined("APPPATH") OR die("Access denied");

use \Core\Database;
use \App\Interfaces\Crud;
use \Core\Model;

/**
 *
 */
class Portafolio implements Crud
{

  /**
   * obtiene todos registros de la tabla portafolio
   */
  public static function getAll(){
    try {
      $connection = Database::instance();
      $sql = "SELECT * from portafolio";
      $query = $connection->prepare($sql);
      $query->execute();
      return $query->fetchAll();
    }
    catch(\PDOException $e)
    {
      print "Error!: " . $e->getMessage();
    }
  }

  public static function getById($id)
  {

  }

  public static function insert($user)
  {

  }

  public static function update($user)
  {

  }

  public static function delete($id)
  {

  }
}
