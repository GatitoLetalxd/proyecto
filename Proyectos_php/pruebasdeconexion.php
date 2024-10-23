<?php 
$server = "localhost";
$user = "root";
$pass = "";

$conexion="";
try{
    $conexion = new PDO("mysql:host=$server;dbname=base_de_prueba", $user, $pass);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo " Conexion realizada con exito <br>";
}catch(PDOException $e){
    echo "La conexion ha fallado: ".$e->getMessage();
}

// $resultado= $conexion->prepare("SELECT * FROM base_de_prueba.usuarios");
// $resultado->execute();
// $resultado = $resultado->fetchAll();
// print_r($resultado);

// $conexion->execute();
// $conexion = null;
// $resultado1= $conexion->prepare("INSERT INTO base_de_prueba.usuarios(nombre, correo, edad) VALUES('maicol', 'maicol@gmail.com', '18')");
$resultado1= $conexion->prepare("ALTER TABLE usuarios ADD contraseña VARCHAR(255)");
$resultado1->execute();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p1></p1>
</body>
</html>