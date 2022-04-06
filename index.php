<?php
include 'config/config.php'
?>
<!DOCTYPE html>
<head>
    <title>Biblioteca Virtual</title>
    <link rel="stylesheet" href="style.css" type="text/css">
<meta charset="utf-8">
<link rel="shortcut icon" href="https://colegiolaesperanza.com/plataforma/pluginfile.php/1/theme_moove/favicon/1643755324/favicon.ico">
<style type="text/css"> BODY{font-family: Courier, "Lucida Console", monospace;} </style>
</head>
<body>
<div class="loader" id="loader"></div>
<nav>
      <ul>
        <li>
          <a href="http://localhost/Biblioteca_Virtual/index/index.php">Inicio</a>
        </li>
        <li>
          <a href="http://localhost/Biblioteca_Virtual/index/index.php">Acerca de</a>
        </li>
        <li>
          <a>Generos</a>
          <ul>
            <li>
            <a href="http://localhost/Biblioteca_Virtual/index/?busqueda=Horror&enviar=Enviar">Horror</a>
            </li>
            <li>
            <a href="http://localhost/Biblioteca_Virtual/index/?busqueda=Fantas%C3%ADa&enviar=Enviar">Fantasía</a>
            </li>
            <li>
            <a href="http://localhost/Biblioteca_Virtual/index/?busqueda=Ciencia+Ficcion&enviar=Enviar">Ciencia Ficción</a>
            </li>
            <li>
            <a href="http://localhost/Biblioteca_Virtual/index/?busqueda=Filosofia&enviar=Enviar">Filosofía y Psicología</a>
            </li>
            <li>
            <a href="http://localhost/Biblioteca_Virtual/index/?busqueda=Religion&enviar=Enviar">Religion y Etica</a>
            </li>
            <li>
            <a href="http://localhost/Biblioteca_Virtual/index/?busqueda=Educativo&enviar=Enviar">Educativo</a>
            </li>
            <li>
            <a href="http://localhost/Biblioteca_Virtual/index/?busqueda=Aventura+y+Accion&enviar=Enviar">Aventura y Accion</a>
            </li>
            <li>
            <a href="http://localhost/Biblioteca_Virtual/index/?busqueda=Ingles&enviar=Enviar">Ingles</a>
            </li>
            <li>
            <a href="http://localhost/Biblioteca_Virtual/index/?busqueda=Biografías&enviar=Enviar">Biografías</a>
            </li>
            <li>
            <a href="http://localhost/Biblioteca_Virtual/index/?busqueda=Tecnología+y+ciencia+aplicada&enviar=Enviar">Tecnología y ciencia aplicada</a>
            </li>
          </ul>
    </nav>
    <form method="get" action="">
    <div>
  <div>
  <input type="text" class="textbox"autocomplete="off" spellcheck="false" name="busqueda" placeholder="Ingrese el libro, Autor o Numero de catalogo" style="width:400px; height:50px" required>
    <input class="button-68" type="submit"  name="enviar" value="Buscar "style="width:400px; height:50px">
    <input class="button-68" type="reset" value="Limpiar" style="width:400px; height:50px"onclick="location.href = 'index.php'">
  </div>
</div>

    <br><br><br>
    <?php
    if(isset($_GET["enviar"])){
      ?>
      <!-- el resultado de la búsqueda lo encapsularemos en un tabla -->
      <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
          <tr>
               <!--creamos los títulos de nuestras dos columnas de nuestra tabla -->
               <td style="background-color:#28AEB3" width="100" align="center"><strong>Titulo</strong></td>
               <td style="background-color:#28AEB3" width="100" align="center"><strong>Autor</strong></td>
               <td style="background-color:#28AEB3" width="100" align="center"><strong>Genero</strong></td>
               <td style="background-color:#28AEB3" width="100" align="center"><strong>ID</strong></td>
          </tr> 
          <?php
  
        $busqueda = $_GET["busqueda"];
        $consulta = $con->query("SELECT * FROM Biblioteca WHERE Title LIKE '%$busqueda%' OR Author LIKE '%$busqueda%' OR ID LIKE '%$busqueda%' OR Genre LIKE '%$busqueda%'");
        while($row = $consulta->fetch_array())
        {
        ?>
           <tr>
               <!--mostramos el nombre y apellido de las tuplas que han coincidido con la 
               cadena insertada en nuestro formulario-->
               <td style="background-color:#FFFFFF; color:black" class="estilo-tabla" align="center"><?=$row['Title']?></td>
               <td style="background-color:#FFFFFF; color:black" class="estilo-tabla" align="center"><?=$row['Author']?></td>
               <td style="background-color:#FFFFFF; color:black" class="estilo-tabla" align="center"><?=$row['Genre']?></td>
               <td style="background-color:#FFFFFF; color:black" class="estilo-tabla" align="center"><?=$row['ID']?></td>
           </tr> 
    <?php 
       } //fin blucle
    ?>
    </table>
    <?php
    }
    ?>

    </form>
    </p>
</div>

<div class="Backgroundimg">
<img src="img/virtual.png" alt="Imagen institucional">
</div>
<footer>
    <hr>
    <div class="borders">
    <p>Este proyecto está siendo llevado a cabo por 2 estudiantes de la <b>Promoción 105</b>.</p>
    <p>Si has encontrado alguna dificultad, problema o simplemente una recomendación que darnos, estamos siempre atentos a cualquier comentario.
    </p>
    <p>Puede contactar con el docente:</p>
    <br>Adolfo Lopez Alvear</br>
    <br>
    <span class="sp-copyright">
            © Copyright 2022. Implementado por ESTUDIANTES CDLE 
            <a href="http://colegiolaesperanza.com" target="_blank">COLEGIO DE LA ESPERANZA

            </a></span>
</div>
    </footer>
<br><br>     
  <tbody>
  </tbody>
  <script>
        document.onreadystatechange = function() {
            if (document.readyState !== "complete") {
                document.querySelector(
                  "body").style.visibility = "hidden";
                document.querySelector(
                  "#loader").style.visibility = "visible";
            } else {
                document.querySelector(
                  "#loader").style.display = "none";
                document.querySelector(
                  "body").style.visibility = "visible";
            }
        };
    </script>
</body>
</html>
