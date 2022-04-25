<?php
include 'config/config.php'
?>
<!DOCTYPE html>
<head>
    <title>Biblioteca Virtual</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="MobileOptimized" content="width" />
    <meta name="HandheldFriendly" content="true" />
<meta charset="utf-8">
<link rel="shortcut icon" href="https://colegiolaesperanza.com/plataforma/pluginfile.php/1/theme_moove/favicon/1643755324/favicon.ico">
<style type="text/css"> BODY{font-family: Courier, "Lucida Console", monospace;} </style>
</head>
<body>
<div class="loader" id="loader"></div>
    <form method="get" action="">
    <div>
  <div>
  <input type="text" class="textbox" autocomplete="off" spellcheck="false" name="busqueda" placeholder="Ingrese el libro, Autor, ID o Genero" style="width:400px; height:50px" required>
    <input class="button-68" type="submit"  name="enviar" value="Buscar " style="width:400px; height:50px">
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
<br><br><br><br><br><br><br><br><br>

    <div class="fullwidth-container">

        <p>La Biblioteca del Colegio de la esperanza, es la responsable de administrar la información bibliográfica para la comunidad y servir de apoyo a los procesos de docencia, aprendizaje, colocando a disposición los contenidos de material bibliográfico y documental, para el desarrollo de las actividades escolares.
        </p>
          <p>
          Se inaugura oficialmente en el 2022 con la presencia de la entonces <b>Promoción 105</b>, con el soporte del docente de lengua castellana, Adolfo López Alvear, y por los estudiantes Alejandro Pedro Steinman y Juanes Esteban Fox
        </p>
         <p>La Biblioteca albergan colecciones de libros, revistas, mapas, entre otros materiales.</p> 
          
        <br>
        <span class="sp-copyright">
                © Copyright 2022. Implementado por CDLE 
                <a href="https://colegiolaesperanza.com/web3" target="_blank">COLEGIO DE LA ESPERANZA
                </a></span>
    </div>    
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
