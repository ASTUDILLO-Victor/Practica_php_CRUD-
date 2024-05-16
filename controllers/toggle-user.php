<?php
require_once("core/bootstrap.php");
require_once("core/bootstrap.php");
// Verificar si se han enviado los datos del formulario y si los campos obligatorios no están vacíos
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['Enom']) && !empty($_POST['Email'])) {
    $user = User::find($_POST['id']);
    // Actualizar el usuario solo si los campos no están vacíos
    $user->update([
        'name' => $_POST['Enom'],
        'email' => $_POST['Email'],
    ]);
    // Redirigir a la página de inicio después de la actualización
    header('Location:index.php?url=inicio');
} else {
    // Enviar un mensaje de error si los campos están vacíos
    echo '<script>alert("Por favor, complete todos los campos obligatorios."); window.history.back();</script>';
}