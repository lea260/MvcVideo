<?php


use Leandro\app\modelo\Producto;
use Leandro\app\libs\Controlador;


class Producto_Controller extends Controlador
{

  public function listar()
  {
    $modelo = new Producto();
    $lista = $modelo->listar();
    $this->cargarVista("producto/listar", $lista);
  }
}
