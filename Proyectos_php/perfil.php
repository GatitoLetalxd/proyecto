<?php
session_start();
if (empty($_SESSION["id"])) {
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio de la pagina</title>
    <link rel="stylesheet" href="styles/perfil.css">
</head>
<body>
    <h1 class="titulo">BIENVENIDO<br></h1>
    <div class="contenedor_perfil">
      <div class="datos">
        <h2>nombre: <?php echo $_SESSION["nombre"]."<br>"?></h2>
        <h2>apellido: <?php echo $_SESSION["apellido"]."<br>"?></h2>
        <h2 class="correo_dato">correo: <?php echo $_SESSION["correo"]."<br>"?></h2>
        <h2>edad: <?php echo $_SESSION["edad"]."<br>"?></h2>
        <a class="boton" href="editar_datos.php">EDITAR DATOS</a>
      </div>
      <img class="foto_perfil" src="imagenes/perfil_vacio.jpg" alt="foto de perfil">
    </div>
    <div class="contenedor_usuario">
        <a class="boton" href="inicio.php">ATRAS</a>
        <a class="boton" href="controlador/controlador_cerrar_sesion.php">SALIR</a>
    </div>

    <div class="contenedor">
    <h1 class="contenedor">SOBRE MI</h1>
    <div class="cards">
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img class ="imagen" src="imagenes/trabajo1.jpg"/>
          </div>
          <div class="flip-card-back">
            <h1>Mis aptitudes</h1>
            <p>Experiencia tecnica</p>
            <p>He trabajado en la instalación de una amplia variedad de accesorios para automóviles, desde sistemas de audio y luces hasta kits de carrocería y dispositivos de seguridad.</p>
          </div>
        </div>
      </div>
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img class ="imagen" src="imagenes/mecanico.jpg"/>
          </div>
          <div class="flip-card-back">
            <h1>YO</h1>
            <p>presentacion</p>
            <p>Soy un trabajador de tiempo completo de la tienda autopartes continental, llevo trabajando por mas de 3 años y tengo bastante experiencia en mi trabajo ademas soy muy responsable...</p>
          </div>
        </div>
      </div>
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img class ="imagen" src="imagenes/trabajo2.jpeg"/>
          </div>
          <div class="flip-card-back">
            <h1>Habilidades</h1>
            <p>Capacidades</p>
            <p>Tengo experiencia en la instalación de sistemas eléctricos, como luces LED, alarmas, cámaras de respaldo y sistemas multimedia. Puedo diagnosticar y solucionar problemas eléctricos con eficiencia.</p>
          </div>
        </div>
      </div>
    </div>
    </div>


    <div class="contenedor">
    <h1 class="contenedor">Mis Artistas Favoritos</h1>
    <div class="cards">
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img class ="imagen" src="imagenes/1.jpg"/>
          </div>
          <div class="flip-card-back">
            <h1>Michael Jackson</h1>
            <p>Cantante</p>
            <p>Michael Jackson (1958-2009) fue un influyente cantante, compositor y bailarín estadounidense, conocido como el “Rey del Pop”. Sus éxitos incluyen “Billie Jean”, “Thriller” y “Black or White”. Su legado perdura en la música y el baile</p>
          </div>
        </div>
      </div>
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img class ="imagen" src="imagenes/2.jpg"/>
          </div>
          <div class="flip-card-back">
            <h1>Kurt Cobain</h1>
            <p>Cantante estilo rock</p>
            <p>Kurt Cobain (1967-1994) fue el líder de la influyente banda de grunge Nirvana. Su vida breve pero intensa dejó una marca imborrable en la música y la cultura popular. Como cantante, guitarrista y compositor, creó éxitos como “Smells Like Teen Spirit” y “Come as You Are”. Su trágica muerte a los 27 años lo convirtió en un ícono legendario</p>
          </div>
        </div>
      </div>
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img class ="imagen" src="imagenes/3.jpg"/>
          </div>
          <div class="flip-card-back">
            <h1>Adele</h1>
            <p>Cantante</p>
            <p>Adele, nacida el 5 de mayo de 1988 en Tottenham, Londres, es una cantante británica reconocida internacionalmente. Su poderosa voz soul y pop la catapultó al éxito con canciones como “Rolling in the Deep” y “Someone Like You”. A los 18 años, firmó su primer contrato discográfico y desde entonces ha cosechado premios Grammy y millones de seguidores.</p>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="final"><a class="boton_agregar">AGREGAR DATOS</a>
    </div>
</body>
</html>