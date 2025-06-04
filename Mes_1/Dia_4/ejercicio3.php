<?php
# 
function contarVocales($palabra = "miguel") {
    $charCounts = count_chars($palabra, 1);
    echo "La cantidad de vocales de la palabra ingresada son: " . $charCounts;
}
contarVocales()
?>
