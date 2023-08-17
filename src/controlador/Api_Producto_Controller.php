<?php

use Leandro\app\modelo\Producto;
use Leandro\app\libs\Controlador;


class Api_Producto_Controller extends Controlador
{

  //echo "con index m index ";

  public function listar()
  {
    $datos = file_get_contents("php://input");
    $json = json_decode($datos);
    $codigo = $json->codigo;
    $descripcion = $json->descripcion;
    $precio = $json->precio;
    $fecha = $json->fecha;
    $lista = Producto::listar();
    $age = array("Peter" => 35, "Ben" => 37, "Joe" => 43);
    echo json_encode($json);
    //$this->cargarVista("producto/listar", $lista);
  }
}
