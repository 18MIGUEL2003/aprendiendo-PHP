<html>
<body>

<?php
$numero = $_POST["numero"];
if ($numero < 1){
    echo "No puedes ingresar por tu baja estatura";
}
elseif($numero <= 1.99 == 1){
    echo "Puedes pasar";
}
elseif($numero >= 2 ){
    echo "Ingresa a los asientos especiales";
} else {
    echo "Datos incorrectos";
}
?>
</body>
</html>