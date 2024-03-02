<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="public/css/main.css" type="text/css">
  <link rel="stylesheet" href="public/css/producto/listar.css" type="text/css">
  <title>Document</title>
</head>

<body>
  <h1>pagina principal vista</h1>
  <?php

  use Leandro\app\modelo\Persona;

  require 'src/vista/menu.php'; ?>

  <table>
    <tr>
      <th>Id</th>
      <th>nombre</th>
      <th>edad</th>
    </tr>
    <?php foreach ($this->datos as $persona) { ?>

    <?php if ($persona->getEdad() > 50) { ?>

    <tr style="background-color:#f01">
      <?php } else {; ?>
    <tr>
      <?php }; ?>

      <td><?= $persona->getId() ?></td>
      <td><?= $persona->getNombre(); ?></td>
      <td><?= $persona->getEdad(); ?></td>
    </tr>
    <?php }; ?>
  </table>

  <p>edad promedio</p>
  <?= $persona->getPromedio() ?>
</body>

</html>