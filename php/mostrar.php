<?php
include "conexion.php";

$sql = "select * From usuarios";
$datos = $conectar->query($sql);




?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mostrar Dato</title>
  <link rel="stylesheet" href="/style.css">

</head>

<body>
  <div class="container">
    <h1>Base de Datos</h1>
    <div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Correo</th>
            <th scope="col">Mensaje</th>
    </tr>
    </thead>
    <tbody>
      <?php foreach ($datos as $i) : ?>
        <tr>

          <th scope="row"><?php echo $i['id']; ?></th>
          <td><?php echo $i['nombre']; ?></td>
          <td><?php echo $i['correo']; ?></td>
          <td><?php echo $i['mensaje']; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
    </table>
  </div>
  </div>
</body>

</html>