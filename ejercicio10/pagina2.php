<html>

<head>
  <title>Problema</title>
</head>

<body>

  <?php
  echo $_REQUEST['nombre'];
  echo "<br>";
  if ($_REQUEST['radio1'] == "sin") {
    echo "Sin estudios.";
  }
  if ($_REQUEST['radio1'] == "primario") {
    echo "Estudios primarios.";
  }
  if ($_REQUEST['radio1'] == "secundario") {
    echo "Estudios secundarios.";
  }

  ?>

</body>

</html>
