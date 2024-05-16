<?php
// Lógica de cierre de sesión

// Cerrar sesión
Auth::logout();

// Redirigir al usuario a la página de inicio de sesión con JavaScript después de cerrar sesión
echo '<script>window.location.href = "index.php?url=login-form";</script>';