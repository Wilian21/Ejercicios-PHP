<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  echo "Listado de la tabla del $_GET[tabla] <br>";
  for ($f = 1; $f <= 10; $f++) {
    $valor = $f * $_GET['tabla'];
    echo $valor . "-";
  }
  ?>
</body>

</html>