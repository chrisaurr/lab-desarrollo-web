<?php
require 'usuario.php';
require 'conexion.php';

// Verificar si se ha recibido el parámetro `id` en la URL
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Crear una instancia de la clase Usuario
    $usuario = new Usuario($conexion);

    // Eliminar el usuario
    if ($usuario->eliminarUsuario($id)) {
        // Redirigir a la lista de usuarios si la eliminación fue exitosa
        header("Location: listar_usuarios.php");
        exit();
    } else {
        // Mostrar un mensaje de error si hubo un problema
        echo "Error al eliminar el usuario.";
    }
} else {
    echo "ID de usuario no especificado.";
}
?>
