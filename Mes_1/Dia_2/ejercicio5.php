<?php
# ✅ Ejercicio 5: Bucles con control
$numero = 3;  // Número del cual deseas imprimir los múltiplos
$limite = 10;  // Número hasta el cual deseas imprimir los múltiplos

echo "Múltiplos de $numero hasta $limite:\n";

for ($i = 1; $i <= $limite; $i++) {
    $multiplo = $numero * $i;
    print("$multiplo\n");
}

?>