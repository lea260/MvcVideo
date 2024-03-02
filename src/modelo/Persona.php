<?php

namespace Leandro\app\modelo;

use PDOException;
use Leandro\app\libs\Conexion;

class Persona
{

  private $id;
  private $nombre;
  private $apellido;
  private $edad;
  private static $promedio;


  public function __construct($id = '', $nombre = "", $edad = "")
  {
    $this->id = $id;
    $this->nombre = $nombre;
    $this->edad = $edad;
  }

  private static function arrayAPersona($item)
  {
    $persona             = new Persona(
      $item['id'],
      $item['nombre'],
      $item['edad'],
    );
    return $persona;
  }

  public static function mostrar()
  {
    $pdo = null;
    $query = null;
    $items = [];
    $pdo = Conexion::getConexion()->getPdo();
    try {
      $total = 0;

      $query      = $pdo->query('SELECT id, nombre,apellido,edad FROM personas');
      while ($row = $query->fetch()) {
        $item = self::arrayAPersona($row);
        $total += $item->getEdad();
        $items[] =   $item;
        //$item->url = isset($row['url']) ? $row['url'] : $urlDefecto;
      }
      self::$promedio = $total / count($items);

      return $items;
    } catch (PDOException $th) {
      //throw $th;
    } finally {
      $pdo = null;
    }
  }

  /**
   * Get the value of nombre
   */
  public function getNombre()
  {
    return $this->nombre;
  }

  /**
   * Get the value of apellido
   */
  public function getApellido()
  {
    return $this->apellido;
  }

  /**
   * Get the value of edad
   */
  public function getEdad()
  {
    return $this->edad;
  }

  /**
   * Get the value of edad
   */


  /**
   * Set the value of edad
   *
   * @return  self
   */
  public function setEdad($edad)
  {
    $this->edad = $edad;

    return $this;
  }

  public function getId()
  {
    return $this->id;
  }

  public static function getPromedio()
  {
    return self::$promedio;
  }
}