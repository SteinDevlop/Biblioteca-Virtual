<?php
include 'config/config.php'
?>
<!DOCTYPE html>
<head>
    <title>Biblioteca Virtual</title>
    <link href="styles/style.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<link rel="shortcut icon" href="https://colegiolaesperanza.com/plataforma/pluginfile.php/1/theme_moove/favicon/1643755324/favicon.ico">
<style type="text/css"> BODY{font-family: Courier, "Lucida Console", monospace;} </style>
<style>
    .input {
        background-color: #448944;
        border: none;
        color: #fff;
        padding: 15px 30px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
    }

.button-68 {
  appearance: none;
  backface-visibility: hidden;
  background-color: #27ae60;
  border-radius: 8px;
  border-style: none;
  box-shadow: rgba(39, 174, 96, .15) 0 4px 9px;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-family: Inter,-apple-system,system-ui,"Segoe UI",Helvetica,Arial,sans-serif;
  font-size: 16px;
  font-weight: 600;
  letter-spacing: normal;
  line-height: 1.5;
  outline: none;
  overflow: hidden;
  padding: 13px 20px;
  position: relative;
  text-align: center;
  text-decoration: none;
  transform: translate3d(0, 0, 0);
  transition: all .3s;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: top;
  white-space: nowrap;
}

.button-68:hover {
  background-color: #1e8449;
  opacity: 1;
  transform: translateY(0);
  transition-duration: .35s;
}

.button-68:active {
  transform: translateY(2px);
  transition-duration: .35s;
}

.button-68:hover {
  box-shadow: rgba(39, 174, 96, .2) 0 6px 12px;
}
img {
  border-radius: 8px;
  
}
    .button {
  background-color: #448944; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}

.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #448944;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
    div.page-search {
    display: flex;
    width: 100%;
}
    div.page-search-2 {
    display: flex;
    width: 100%;
}
    div.dropdown {
    text-align: right;
}
.Backgroundimg {
    text-align: center;
}
  
    body {
background-color: #2b2b2b;
color: white;
}
    .dropbtn {
        background-color: rgb(52, 97, 48);
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
    }
    
    .dropdown {
        position: relative;
        display: inline-block;
    }
    
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: lightgrey;
        min-width: 200px;
        z-index: 1;
    }
    
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }
.textbox {
	border: 1px solid #848484;
	-webkit-border-radius: 30px;
	-moz-border-radius: 30px;
	border-radius: 30px;
	outline:0;
	height:25px;
	width: 275px;
	padding-left:10px;
	padding-right:10px;
}    
    .dropdown-content a:hover {background-color: rgb(126, 197, 126);}
    .dropdown:hover .dropdown-content {display: block;}
    .dropdown:hover .dropbtn {background-color: rgb(32, 63, 37);}

.borders {
  border: 2px;
  background: rgb(61,135,54);
background: linear-gradient(90deg, rgba(61,135,54,1) 57%, rgba(219,255,0,1) 100%);
  border-radius: 8px;
  padding:5px;
}
.border_r {
border: 2px;
padding:5px;
background: rgb(61,135,54);
background: linear-gradient(90deg, rgba(61,135,54,1) 57%, rgba(219,255,0,1) 100%);
}
/* Add a black background color to the top navigation */
.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
nav ul ul {
        display: none;
      }
      nav ul li:hover > ul {
        display: block;
      }
      nav ul:after {
        content: "";
        clear: both;
        display: block;
      }
      nav ul li {
        float: left;
        position: relative;
        list-style-type: none;
      }
      nav ul li:hover {
        background: rgba(39, 174, 96, .15);
      }
      nav ul li:hover a {
        color: #fff;
      }
      nav ul li a {
        display: block;
        padding: 20px 30px;
        color: #ffffff;
        text-decoration: none;
        background-color: rgba(39, 174, 96, .15);
        font-family: sans-serif;
      }
      nav ul ul {
        background: #5f6975;
        padding: 0;
        position: absolute;
        top: 100%;
      }
      nav ul ul li {
        float: none;
        position: relative;
      }
      nav ul ul li a {
        padding: 15px 10px;
        color: #ffffff;
        text-transform: uppercase;
      }
      nav ul ul li a:hover {
        background: rgba(39, 174, 96, .15);
      }
      .card {
 background-image: linear-gradient(163deg, #00ff75 0%, #3700ff 100%);
 border-radius: 20px;
 transition: all .3s;
}

.card2 {
 background-color: #2b2b2b;
 border-radius:2;
 transition: all .2s;
}

.card2:hover {
 transform: scale(0.98);
 border-radius: 20px;
}

.card:hover {
 box-shadow: 0px 0px 30px 1px rgba(0, 255, 117, 0.30);
}
</style>
</head>
<body>
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
</body>
</html>
