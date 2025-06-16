<?php
// catalogo.php

$productos = [
    ["id" => 1, "nombre" => "Martillo", "precio" => 35000, "stock" => 20],
    ["id" => 2, "nombre" => "Taladro", "precio" => 120000, "stock" => 10],
    ["id" => 3, "nombre" => "Pintura", "precio" => 45000, "stock" => 15],
    ["id" => 4, "nombre" => "Destornillador", "precio" => 15000, "stock" => 30],
    ["id" => 5, "nombre" => "Clavos", "precio" => 5000, "stock" => 100],
];

// funciones.php
function calcularTotalInventario($productos) {
    $total = 0;
    foreach ($productos as $producto) {
        $total += $producto["precio"] * $producto["stock"];
    }
    return $total;
}

function buscarProductoPorId($productos, $id) {
    foreach ($productos as $producto) {
        if ($producto["id"] == $id) {
            return $producto;
        }
    }
    return null;
}

// tabla_productos.php
function imprimirTabla($productos) {
    echo "<table border='1' cellpadding='8'>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Precio</th><th>Stock</th><th>Acciones</th></tr>";
    foreach ($productos as $producto) {
        echo "<tr>";
        echo "<td>{$producto['id']}</td>";
        echo "<td>{$producto['nombre']}</td>";
        echo "<td>\${$producto['precio']}</td>";
        echo "<td>{$producto['stock']}</td>";
        echo "<td><a href='editar.php?id={$producto['id']}'>Editar</a></td>";
        echo "</tr>";
    }
    echo "</table>";
}

// index.php
include("catalogo.php");
include("funciones.php");
include("tabla_productos.php");

echo "<h1>Catálogo de productos</h1>";
imprimirTabla($productos);

echo "<p>Total en inventario: <strong>$" . calcularTotalInventario($productos) . "</strong></p>";
echo "<a href='agregar.php'>Agregar nuevo producto</a>";
