<?php
# ✅ Ejercicio 3: Array de productos con precio
$productos = array(
    "Martillo" => 35000,
    "Taladro" => 120000,
    "Pintura" => 45000
);
foreach ($productos as $key => $value) {
    echo "El producto " . $key . " cuesta " . $value . "<br>";
}
?>