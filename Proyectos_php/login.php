<?php
include "conexion.php";
?>
<div id="php" data-temp="<?php echo $datos_incorrectos;?>">
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/login.css">
    <title>login</title>
    <script src="controlador/formulario.js" defer></script>
    <script src="styles/fondo_estrellas.js" defer></script>
</head>
<body>
    <div class="fondo_animado">
        <div class="space space-1"></div>
        <div class="space space-2"></div>
        <div class="space space-3"></div>
        <div class="contenedor_login">
            <form method="post" action="" class="formulario" id="formulario">
                <div>
                    <h1 class="bienvenida">BIENVENIDO</h1>
                </div>

                <h1 class="titulo">Iniciar Sesión</h1>
                <p class="formulario_error_incorrecto">Error: Datos incorrectos</p>
                <p class="formulario_error_vacio">Error: Datos vacios</p>
                <div class="formulario_error_incorrectos"><?php include "controlador/controlador_login.php"; ?></div>
                <div class="contenedor_datos" id="contenedor_correo">
                    <input id="correo" type="text" name="correo" placeholder="a" class="input" >
                    <label for="" class="label">Correo</label>
                </div>
                <p class="formulario_error_correo">Porfavor digite bien el correo.</p>
                <p class="formulario_error_correo_vacio">Este campo es obligatorio.</p>

                <div class="contenedor_datos" id="contenedor_password">
                    <input type="password" id="password" class="input" name="password" placeholder="a" class="input">
                    <label for="" class="label">Contraseña</label>
                </div>
                <p class="formulario_error_contraseña">La contraseña debe tener al menos 4 caracteres.</p>
                <p class="formulario_error_contraseña_vacio">Este campo es obligatorio.</p>

                <input type="submit" value="  INGRESAR  "name="botoningresar" class="boton_enviar">
                <button class="boton_enviar"><a href="registro.php">REGISTRATE</a></button>
                
            </form>
        </div>
    </div>
    
</body>
</html>