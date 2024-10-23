<?php
    session_start();
    if (!empty($_POST["botoningresar"])){//verifica que el boton se haya presionado
        $datos_incorrectos = false;
        if (!empty($_POST["correo"]) && !empty($_POST["password"])){//verifica que se hayan introducido los datos
            $usser = $_POST["correo"];
            $passw = $_POST["password"];
            // echo "se ha presionado del boton";
            // echo $usser;
            // echo $passw;
            $stmt = $conexion->prepare("SELECT * FROM base_de_prueba.usuarios WHERE correo = :correo AND contrasena = :contrasena");
            $stmt->bindParam(':correo', $usser);
            $stmt->bindParam(':contrasena', $passw);
            $stmt->execute();
            
        
            if ($datos = $stmt->fetch(PDO::FETCH_OBJ)){
                $_SESSION["id"]=$datos->id;
                $_SESSION["nombre"]=$datos->nombre;
                $_SESSION["apellido"]=$datos->apellido;
                $_SESSION["correo"]=$datos->correo;
                $_SESSION["edad"]=$datos->edad;
                // $datos_incorrectos = "1";
                header("location: inicio.php");
                
                exit;
            } 
            else {
                echo "<div>Error: Contraseña o correo incorrectos</div>";
                // header("location: login.php");
                header("refresh:3;url=login.php");
                // $datos_incorrectos = "2";
                // $claseActiva = "formulario-error-activo";
                
            }
        } 
        else {
            echo"campos vacios";
        }
    }
?>
<!-- a -->