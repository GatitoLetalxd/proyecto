
<?php
include "conexion.php";
include "controlador/controlador_registro.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="styles/registro.css">
</head>
<body class="fondo_animado">

    <div class="contenedor_login">
        <form method="post" action="" class="formulario" id="formulario">
            <div>
                <h1 class="bienvenida">¿ERES NUEVO?</h1>
            </div>
            <h1 class="titulo">REGISTRESE</h1>
            
                <div class="contenedor_datos" id="contenedor_nombre">
                    <input id="nombre" type="text" name="nombre_registro" placeholder="ingrese nombre" class="input">
                    <label for="" class="label">Nombre</label>
                </div>
                <div class="contenedor_datos" id="contenedor_apellido">
                    <input id="apellido" type="text" name="apellido_registro" placeholder="ingrese apellido" class="input">
                    <label for="" class="label">Apellido</label>
                </div>
                <div class="contenedor_datos" id="contenedor_edad">
                    <input id="edad" type="number" name="edad_registro" placeholder="ingrese edad" class="input">
                    <label for="" class="label">Edad</label>
                </div>
                <div class="contenedor_datos" id="contenedor_correo">
                    <input id="correo" type="email" name="correo_registro" placeholder="ingrese correo" class="input">
                    <label for="" class="label">Correo</label>
                </div>
                <div class="contenedor_datos" id="contenedor_password">
                    <input type="password" id="password" class="input" name="password_registro" placeholder="ingrese su contraseña" class="input">
                    <label for="" class="label">Contraseña</label>
                </div>
                <input type="submit" value="REGISTRAR" name="botonregistrar" class="boton_enviar">
                <button class="boton_enviar"><a href="login.php">SE HA REGISTRADO? <br> ->INICIE SESION AQUI<- </a></button>
            </div>
        </form>
        
    </div>
</body>
</html>