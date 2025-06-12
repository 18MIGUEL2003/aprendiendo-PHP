<?php
# 🧩 Ejercicio 1: Crear un array multidimensional para un catálogo de productos
$productos = array(
    array("Nombre" => "Huevos", "Precio" => 800, "Cantidad" => 100),
    array("Nombre" => "Leche", "Precio" => 4000, "Cantidad" => 50),
    array("Nombre" => "Pan", "Precio" => 3000, "Cantidad" => 200),
    array("Nombre" => "Salchichas", "Precio" => 1000, "Cantidad" => 300),
    array("Nombre" => "Cereal", "Precio" => 10000, "Cantidad" => 80)
);

foreach ($productos as $producto) {
    foreach ($producto as $clave => $valor) {
        echo "$clave: $valor ";
    }
    echo "<br>";
}
# function totalInventario($productos = ["Precio"] * ["Cantidad"]) {
#    echo "El inventario total de los huevos son: " . $productos;
#}
?>