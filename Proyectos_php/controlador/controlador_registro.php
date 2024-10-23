<?php

    if (!empty($_POST["botonregistrar"])){//verifica que el boton se haya presionado
        if (!empty($_POST['nombre_registro']) && !empty($_POST['apellido_registro']) && !empty($_POST["edad_registro"]) && !empty($_POST["correo_registro"]) && !empty($_POST["password_registro"])){//verifica que se hayan introducido los datos
            $nombre_resgistro = $_POST['nombre_registro'];
            $apellido_resgistro = $_POST['apellido_registro'];
            $edad_registro = $_POST["edad_registro"];
            $correo_registro = $_POST['correo_registro'];
            $password_registro = $_POST["password_registro"];
            //METODO FUNCION MYSQL
            $comparar = $conexion->prepare("SELECT base_de_prueba.comparar_correo('$correo_registro')");
            $comparar->execute();
            $resultado2= $comparar->fetchColumn();
            print($resultado2);
             if($resultado==1){
                echo "El correo electrónico ya está registrado.";
            }else{
                $registra = $conexion->prepare("INSERT INTO base_de_prueba.usuarios (nombre, apellido, correo, edad, contrasena) VALUES ('$nombre_resgistro', '$apellido_resgistro', '$correo_registro', ' $edad_registro', '$password_registro')");
                $registra->execute();
                header("location: confirmacion_registro.php");

            //METODO COMPARACION PHP
            // $consulta = $conexion->prepare('SELECT * FROM usuarios WHERE correo = :correo');
            // $consulta->bindParam(':correo', $correo_registro);
            // $consulta->execute();
            // if ($consulta->rowCount() > 0) {
            //     echo "El correo electrónico ya está registrado.";
            // } else {
            //     $stmt = $conexion->prepare("INSERT INTO base_de_prueba.usuarios (nombre, apellido, correo, edad, contrasena) VALUES ('$nombre_resgistro', '$apellido_resgistro', '$correo_registro', ' $edad_registro', '$password_registro')");
            //     $stmt->execute();
            //     header("location: confirmacion_registro.php");
            

            }
        }else {
            echo "campos vacios";
        }
    } 
?>
<!--  -->
