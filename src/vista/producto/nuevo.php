<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>agregar producto</h1>
  <?php
  require 'src/vista/menu.php'; ?>
  <form action="index.php?c=producto&m=crear" method="post">
    <label for="fecha"></label>
    <input type="date" name="fecha" id="fecha" value="2022-02-26">
    <input type="submit" value="Enviar">
  </form>

</body>

</html>