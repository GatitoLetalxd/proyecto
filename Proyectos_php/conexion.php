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