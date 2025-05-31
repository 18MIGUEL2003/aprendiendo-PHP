<?php
# 🧩 Ejercicio 2: Validar correo electrónico
# Crea una función que reciba una cadena y valide si es un correo electrónico válido usando filter_var.
function correo_electronico($correo) {
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL) === false) {
        echo("$correo Es un correo valido");
      } else {
        echo("$correo No es un correo valido");
      }}
      correo_electronico("john.doe@example.com.com123.com")
      ?>
