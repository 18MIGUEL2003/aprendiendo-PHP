<?php
# ✅ Reto Día 4: Enfocado en consolidar lógica, funciones y simular mini-aplicaciones reales
# 🧩 Ejercicio 1: Función para calcular salario
# Crea una función que reciba como parámetros: nombre del empleado, horas trabajadas y tarifa por hora.
# Debe retornar un mensaje con el salario total y nombre del empleado.
function salario_total($nombre, $horas_trabajadas, $tarifa_hora) {
    echo $nombre . " tu salario total es de " . $horas_trabajadas * $tarifa_hora;
}
salario_total("Messi", 80, 5000)
?>