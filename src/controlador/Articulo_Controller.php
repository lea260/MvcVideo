<?php




use Leandro\app\modelo\Producto;
use Leandro\app\libs\Controlador;


class Articulo_Controller extends Controlador
{
  public function mostrar()
  {
    $lista = Producto::listar();
    $this->cargarVista("articulo/mostrar", $lista);
  }
}
