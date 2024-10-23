<?php
session_start();
if (empty($_SESSION["id"])) {
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Contrato del Trabajador</title>
    <link rel="stylesheet" href="styles/inicio.css">
    <script src="controlador/inicio.js"></script>
</head>
<body>
<div>
    <h1 class="titulo">BIENVENIDO<br></h1>
    <div class="contenedor_usuario">
        <h2 class="datos"><?php echo $_SESSION["nombre"]." ".$_SESSION["apellido"]; ?></h2>
        <a class="boton" href="perfil.php">PERFIL</a>
        <a class="boton" href="controlador/controlador_cerrar_sesion.php">SALIR</a>
    </div>


    <h1>Detalles de su Contrato</h1>
    <table>
        <tr>
            <th>Duración del contrato</th>
            <td id="duracion_contrato"></td>
        </tr>
        <tr>
            <th>Tiempo Trabajado</th>
            <td id="tiempo_trabajado"></td>
        </tr>
        <tr>
            <th>Fecha de Fin de Contrato</th>
            <td id="fecha_fin_contrato"></td>
        </tr>
    </table>
    
    <h2>Calendario de Días Trabajados</h2>
    <div id="calendario" class="calendario"></div>
    
</body>
</html>