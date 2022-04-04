<?php
include 'config/config.php'
?>
<!DOCTYPE html>
<head>
    <title>Biblioteca Virtual</title>
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
    
    </style>
</head>
<body>
    
    <div class="dropdown">
    <button class="dropbtn">Generos</button>
    <div class="dropdown-content">
    <a href="http://localhost/Biblioteca_Virtual/index/?busqueda=Horror&enviar=Enviar">Horror</a>
    <a href="http://localhost/Biblioteca_Virtual/index/?busqueda=Fantas%C3%ADa&enviar=Enviar">Fantasía</a>
    <a href="http://localhost/Biblioteca_Virtual/index/?busqueda=Ciencia+Ficcion&enviar=Enviar">Ciencia Ficción</a>
    <a href="http://localhost/Biblioteca_Virtual/index/?busqueda=Filosofia&enviar=Enviar">Filosofía y Psicología</a>
    <a href="http://localhost/Biblioteca_Virtual/index/?busqueda=Religion&enviar=Enviar">Religion y Etica</a>
    <a href="http://localhost/Biblioteca_Virtual/index/?busqueda=Educativo&enviar=Enviar">Educativo</a>
    <a href="http://localhost/Biblioteca_Virtual/index/?busqueda=Aventura+y+Accion&enviar=Enviar">Aventura y Accion</a>
    <a href="http://localhost/Biblioteca_Virtual/index/?busqueda=Ingles&enviar=Enviar">Ingles</a>
    <a href="http://localhost/Biblioteca_Virtual/index/?busqueda=Biografías&enviar=Enviar">Biografías</a>
    <a href="http://localhost/Biblioteca_Virtual/index/?busqueda=Tecnología+y+ciencia+aplicada&enviar=Enviar">Tecnología y ciencia aplicada</a>
    </div>
    </div>
 
    <form method="get" action="">
    <input type="text" class="textbox"autocomplete="off" spellcheck="false" name="busqueda" placeholder="Ingrese el libro, Autor o Numero de catalogo" style="width:400px; height:50px" required>
    <input class="input" type="submit"  name="enviar" value="Buscar "style="width:400px; height:50px">
    <input class="input" type="reset" value="Limpiar" style="width:400px; height:50px"onclick="location.href = 'index.php'">
    <br><br><br>
    <?php
    if(isset($_GET["enviar"])){
        $busqueda = $_GET["busqueda"];
        $consulta = $con->query("SELECT * FROM Biblioteca WHERE Title LIKE '%$busqueda%' OR Author LIKE '%$busqueda%' OR ID LIKE '%$busqueda%' OR Genre LIKE '%$busqueda%'");
        while($row = $consulta->fetch_array())
        {
        ?>
         <table class="tr">
        
        <tr>

        <th style="border:2px solid #ffd000;">Titulo</th>

        <th style="border:2px solid #ffd000;" >Autor</th>
        <th style="border:2px solid #ffd000;" >Genero</th>
        <th style="border:2px solid #ffd000;" >Numero de catalogo</th>

        </tr>
        <tr>
               <!--mostramos el nombre y apellido de las tuplas que han coincidido con la 
               cadena insertada en nuestro formulario-->
            <td  style="border:2px solid Tomato;" class="tr" align="center"><?=$row['Title']?></td>
            <td style="border:2px solid DodgerBlue;" class="tr" align="center"><?=$row['Author']?></td>
            <td style="border:2px solid #0d397a;" class="tr" align="center"><?=$row['Genre']?></td>
            <td style="border:2px solid Violet;" class="tr" align="center"><?=$row['ID']?></td>
            <br>
        </tr> 
        <?php 
       } //fin blucle
    ?>
    </table>
    <?php
} // fin if 
?>

    </form>
    </p>
</div>

<div class="Backgroundimg">
<img src="img/virtual.png" alt="Imagen institucional">
</div>
<hr>
<footer>
    <p>Este proyecto está siendo llevado a cabo por 2 estudiantes de la <b>Promoción 105</b>.</p>
    <p>Si has encontrado alguna dificultad, problema o simplemente una recomendación que darnos, estamos siempre atentos a cualquier comentario.
    </p>
    <p>Puede contactar con el docente: </p>
    <br>
    Adolfo Lopez Alvear
    </br>
    <br>
    
    </footer>
<hr>
<br><br>
<div id="sp-footer1" class="col-sm-12 col-md-12">
    <div class="sp-column ">
        <span class="sp-copyright">
            © Copyright 2022. Implementado por ESTUDIANTES CDLE 
            <a href="http://colegiolaesperanza.com" target="_blank">COLEGIO DE LA ESPERANZA

            </a></span></div></div>
  <tbody>
  </tbody>
</body>
</html>