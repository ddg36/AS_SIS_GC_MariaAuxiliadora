<?php
include_once "controlador_FuncionesDb.php"; // Incluir el archivo de conexión a la base de datos

if (!empty($_POST["submit"])) {
    if (empty($_POST['username']) and empty($_POST['email']) and empty($_POST['password'])) {
        echo "Por favor, ingrese todos los datos requeridos";
    } else {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql=$conectar->query("SELECT * FROM Usuarios WHERE nombre_usuario='$username' AND contrasena='$password' AND correo_electronico='$email'");
        if ($datos=$sql->fetch_object()) {
            # code...
            header("location:index.php");
        }    else {
            # code...
            echo "Datos incorrectos";
        }
    }
}