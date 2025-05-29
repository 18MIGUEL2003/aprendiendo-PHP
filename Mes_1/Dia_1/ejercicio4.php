<?php
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
foreach ($numeros as $valor) {
    // código a ejecutar en cada iteración
    if($valor % 2 == 0) {
        echo $valor;
    }
}
?>