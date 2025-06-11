<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu CLI - Parque de diversiones</title>
</head>
<body>
    <h1>Parque de diversiones</h1>
    <h2>Elige una de las opciones para ingresar a la montaña rusa (Ingresa el valor con minimo un decimal):</h2>
    <p>1. Mido menos de un metro</p>
    <p>2. Mido menos de dos metros y mas de un metro</p>
    <p>3. Mido mas de dos metros</p>
<form action="formulario.php" method="POST">
  <label for="numero">Ingresa un numero:</label><br>
  <input type="float" id="numero" name="numero" required><br>
  <input type="submit" value="Submit">
</form>
</body>
</html>