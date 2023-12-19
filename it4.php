<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Horarios</title>
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Maria Auxiliadora</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- plantillas -->
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ==========================fin plantilla============================== -->


 <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            width: 100%;
        }

        .appointment .php-email-form {
            width: 100%;
        }

        .appointment .php-email-form .form-group {
            padding-bottom: 8px;
        }

        .appointment .php-email-form .validate {
            display: none;
            color: red;
            margin: 0 0 15px 0;
            font-weight: 400;
            font-size: 13px;
        }

        .appointment .php-email-form .error-message {
            display: none;
            color: #fff;
            background: #ed3c0d;
            text-align: left;
            padding: 15px;
            font-weight: 600;
        }

        .appointment .php-email-form .error-message br+br {
            margin-top: 25px;
        }

        .appointment .php-email-form .sent-message {
            display: none;
            color: #fff;
            background: #18d26e;
            text-align: center;
            padding: 15px;
            font-weight: 600;
        }

        .appointment .php-email-form .loading {
            display: none;
            background: #fff;
            text-align: center;
            padding: 15px;
        }

        .appointment .php-email-form .loading:before {
            content: "";
            display: inline-block;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            margin: 0 10px -6px 0;
            border: 3px solid #18d26e;
            border-top-color: #eee;
            animation: animate-loading 1s linear infinite;
        }

        .appointment .php-email-form input,
        .appointment .php-email-form textarea,
        .appointment .php-email-form select {
            border-radius: 0;
            box-shadow: none;
            font-size: 14px;
            padding: 10px !important;
        }

        .appointment .php-email-form input:focus,
        .appointment .php-email-form textarea:focus,
        .appointment .php-email-form select:focus {
            border-color: #1977cc;
        }

        .appointment .php-email-form input,
        .appointment .php-email-form select {
            height: 44px;
        }

        .appointment .php-email-form textarea {
            padding: 10px 12px;
        }

        .appointment .php-email-form button[type=submit] {
            background: #1977cc;
            border: 0;
            padding: 10px 35px;
            color: #fff;
            transition: 0.4s;
            border-radius: 50px;
        }

        .appointment .php-email-form button[type=submit]:hover {
            background: #1c84e3;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="registration section-bg">
        <h1>Registro de Consulta y Facturación</h1>

        <!-- Formulario para registro de consulta y facturación -->
        <form method="post" action="" class="php-form">
            <h2>Registro de Consulta y Facturación</h2>
            <div class="form-group">
                <label for="paciente">Paciente:</label>
                <input type="text" name="paciente" required>
            </div>
            <div class="form-group">
                <label for="fecha_consulta">Fecha de Consulta:</label>
                <input type="date" name="fecha_consulta" required>
            </div>
            <div class="form-group">
                <label for="monto_factura">Monto de Factura:</label>
                <input type="number" name="monto_factura" required>
            </div>
            <button type="submit">Registrar Consulta</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<div class='sent-message'>Operación realizada con éxito</div>";
        }
        ?>
    </div>
</div>

</div>

<div class="reminder section-bg">
    <h1>Recordatorio de Citas</h1>

    <!-- Formulario para recordatorio de citas -->
    <form method="post" action="" class="php-form">
        <h2>Recordatorio de Citas</h2>
        <div class="form-group">
            <label for="nombre_paciente">Nombre del Paciente:</label>
            <input type="text" name="nombre_paciente" required>
        </div>
        <div class="form-group">
            <label for="fecha_cita">Fecha de la Cita:</label>
            <input type="date" name="fecha_cita" required>
        </div>
        <div class="form-group">
            <label for="hora_cita">Hora de la Cita:</label>
            <input type="time" name="hora_cita" required>
        </div>
        <button type="submit">Enviar Recordatorio</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<div class='sent-message'>Recordatorio enviado con éxito</div>";
    }
    ?>
</div>
<!-- #region 
-->

</body>
</html>