<?php
include_once "controlador_FuncionesDb.php"; // Incluir el archivo de conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Conexión a la base de datos
    $con = conectar();

    // Recibir datos del formulario
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $id_rol = $_POST['id_rol']; // Asegúrate de que este valor exista en la tabla roles

    // Preparar la consulta para insertar datos en la tabla Usuarios
    $stmt = $con->prepare("INSERT INTO Usuarios (nombre_usuario, correo_electronico, contrasena, id_rol) VALUES (?, ?, ?, ?)");

    // Encriptar la contraseña
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Vincular los parámetros y ejecutar la consulta
    $stmt->bind_param("sssi", $username, $email, $hashed_password, $id_rol);

    if ($stmt->execute()) {
        // Registro exitoso
        echo "Registro exitoso";
        // Aquí podrías redirigir a una página de éxito o mostrar un mensaje apropiado al usuario
    } else {
        // Error al registrar
        echo "Error al registrar el usuario: " . $con->error;
        // Manejar el error de acuerdo a tu flujo de aplicación
    }

    // Cerrar la conexión y liberar recursos
    $stmt->close();
    $con->close();
} else {
    // Si no es una solicitud POST, puedes redirigir o manejar el flujo de otra manera
    echo "Acceso denegado";
    // Manejar el acceso no autorizado de acuerdo a tu flujo de aplicación
}
?>