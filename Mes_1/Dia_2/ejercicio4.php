<?php
# ✅ Ejercicio 4: Simulación de login
$usuarioGuardado = "admin";
$contrasenaGuardada = "1234";

$usuario = readline("Ingresa el usuario:");
$contraseña = readline("Ingresa la contraseña:");

$contraseña_entero = intval($contraseña);

if ($usuario == $usuarioGuardado and $contraseña_entero == $contrasenaGuardada){
    echo "Acceso concedido";
}
elseif($usuario != $usuarioGuardado and $contraseña_entero != $contrasenaGuardada){
    echo "Usuario o contraseña incorrectos";
} else {
    echo "Datos incorrectos";
}
?>