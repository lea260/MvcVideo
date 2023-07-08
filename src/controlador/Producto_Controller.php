<?php



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
    $codigo = $_POST['codigo'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $fecha = $_POST['fecha'];
    $producto = new Producto(null, $codigo, $descripcion, $precio, $fecha);
    $id = $producto->crear();
    $fechaF = $date = DateTime::createFromFormat('Y-m-d', $fecha)->format('Y-m-d');
  }
}
