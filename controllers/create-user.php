<?php

require_once("core/bootstrap.php");
// Verificar si se han enviado los datos del formulario y si los campos obligatorios no están vacíos
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    $password = $_POST['password'];
    $hash = password_hash($password, PASSWORD_DEFAULT);
    // Crear el usuario solo si los campos no están vacíos
    User::create([
        'id' => $_POST['id'],
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'password' => $hash,
    ]);
    // Redirigir a la página de inicio después de crear el usuario
    header('Location:index.php?url=inicio');
} else {
    // Mostrar un script de JavaScript para mostrar una alerta en la misma página
    echo '<script>alert("Por favor, complete todos los campos obligatorios."); window.history.back();</script>';
}

