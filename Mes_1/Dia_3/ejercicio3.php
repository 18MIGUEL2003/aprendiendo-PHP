<?php
# 🧩 Ejercicio 3: Gestión de inventario
# Crea un array de productos, donde cada producto tenga nombre, cantidad y precio.
# Luego imprime el inventario con el siguiente formato:
    function inventario($nombre, $cantidad, $precio) {
        echo "Producto: $nombre, | Cantidad: $cantidad, | Precio: $precio <br>";
    }
    inventario("Tornillo", 80, 5000);
    inventario("Tuerca", 100, 500);
    inventario("Arandela", 200, 500);
    ?>