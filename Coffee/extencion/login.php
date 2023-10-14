<?php
$mysqli = new mysqli('localhost', 'root', '', 'empresa');

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Sunset Coffee Shop</title>
</head>

<body>
    <div class="container-form regis">
        <div class="lo">
            <div class="mensaje">
                <h2>Bienvenido de nuevo</h2>
                <p>Si aun no tienes una cuenta por favor registrese aqui</p>
                <button class="btn-registro">Registrarse</button>
            </div>
        </div>
               <form id="formLogin" class="formulario" method="$_POST">
            <h2 class="create-account">Iniciar Sesion</h2>
            <div class="iconos">
                <div class="border-icon">
        <i class='bx bxl-instagram'></i>
                </div>
                <div class="border-icon">
        <i class='bx bxl-linkedin' ></i>
                </div>
                <div class="border-icon">
        <i class='bx bxl-facebook-circle' ></i>
                </div>
            </div>
            <input type="email" name="correo" placeholder="Email">
            <input type="password" name="contraseña" placeholder="Contraseña">
            <button type="button" name="btningresar" onclick="login()">Iniciar Sesión</button>
        </form>
    </div>
    <div class="container-form inicio">
        <form id="formRegistro" class="formulario" method="$_POST">
            <h2 class="create-account">Crear una cuenta</h2>
            <div class="iconos">
                <div class="border-icon">
                    <i class='bx bxl-instagram'></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-linkedin' ></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-facebook-circle' ></i>
                </div>
            </div>
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="email" name="correo" placeholder="Email">
            <input type="password" name="contraseña" placeholder="Contraseña">
            <button type="button" name="btnregistro" onclick="registrar()">Registrarse</button>
        </form>
        <div class="lo">
            <div class="mensaje">
                <h2>Bienvenido a Sunset Coffee Shop</h2>
                <p>Si ya tienes una cuenta por favor inicia sesion aqui</p>
                <button class="btn-sesion" >Iniciar Sesion</button>
            </div>
        </div>

    </div>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/login.js"></script>
</body>

</html>