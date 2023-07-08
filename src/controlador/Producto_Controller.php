<?php


use DateTime;
use Leandro\app\modelo\Producto;
use Leandro\app\libs\Controlador;


class Producto_Controller extends Controlador
{
  public function listar()
  {
    $lista = Producto::listar();
    $this->cargarVista("producto/listar", $lista);
  }
  public function nuevo()
  {
    $this->cargarVista("producto/nuevo");
  }
  public function crear()
  {
    $fecha = $_POST['fecha'];
    $fechaF = $date = DateTime::createFromFormat('Y-m-d', $fecha)->format('Y-m-d');
  }
}
