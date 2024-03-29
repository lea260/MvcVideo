<?php

use Leandro\app\libs\Controlador;
use Leandro\app\modelo\Persona;

class Persona_Controller extends Controlador
{

  public function listar()
  {
    $modelo = new Persona();
    $lista = $modelo->listar();
    $this->cargarVista("persona/listar", $lista);
  }

  public function mostrar()
  {
    $lista = Persona::mostrar();
    $this->cargarVista("persona/mostrar", $lista);
  }
}