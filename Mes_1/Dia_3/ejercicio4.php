<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario simple</title>
</head>
<body>
<form action="formulario.php" method="POST">
  <label for="nombre">Nombre:</label><br>
  <input type="text" id="nombre" name="nombre" value="Miguel" required><br>
  <label for="edad">Edad:</label><br>
  <input type="number" id="edad" name="edad" value=21><br>
  <label for="comentario">Comentario:</label><br>
  <input type="text" id="comentario" name="comentario" value="" required><br><br>
  <input type="submit" value="Submit">
</form>
</body>
</html>