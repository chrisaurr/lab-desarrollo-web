<?php
require 'usuario.php';
require 'conexion.php';

// Verificar si la solicitud es de tipo POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $direccion = $_POST["direccion"];
    $telefono = $_POST["telefono"];

    // Crear una instancia de la clase Usuario
    $usuario = new Usuario($conexion);

    // Actualizar el usuario
    if ($usuario->actualizarUsuario($id, $nombre, $direccion, $telefono)) {
        // Redirigir a la lista de usuarios si la actualización fue exitosa
        header("Location: listar_usuarios.php");
        exit();
    } else {
        // Mostrar un mensaje de error si hubo un problema
        echo "Error al actualizar el usuario.";
    }
} else {
    echo "Solicitud inválida.";
}
?>
