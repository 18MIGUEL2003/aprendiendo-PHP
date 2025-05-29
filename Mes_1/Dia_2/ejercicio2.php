<?php
#✅ Ejercicio 2: Evaluar múltiples condiciones
$nota = 4.3;
$asistencia = 79;

if ($nota >= 3 and $asistencia >=80){
    echo "Aprobado";
}
elseif($nota >= 3.5 and $asistencia <80){
    echo "Reprobado por asistencia";
}
elseif($nota < 3.5){
    echo "Reprobado por nota";
} else {
    echo "Datos incorrectos";
}
?>