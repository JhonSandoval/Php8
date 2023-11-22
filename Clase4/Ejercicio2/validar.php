<?php

// Inicializar las variables
$correo = "";
$contrasena = "";
$errores = [];

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];

    // Validar que no haya campos vacíos
    if (empty($correo) || empty($contrasena)) {
        $errores[] = "Todos los campos son obligatorios";
    }

    // Validar el formato del correo y la contraseña
    $correo_valido = "developerphp@test.test";
    $contrasena_valida = "1234AbcD";

    if ($correo != $correo_valido || $contrasena != $contrasena_valida) {
        $errores[] = "Credenciales incorrectas";
    }

    // Si hay errores, mostrarlos y no procesar el formulario
    if (!empty($errores)) {
        foreach ($errores as $error) {
            echo "<p>Error: $error</p>";
        }
    } else {
        // Si no hay errores, el login es exitoso
        echo "¡Inicio de sesión exitoso!";
    }
}

?>
