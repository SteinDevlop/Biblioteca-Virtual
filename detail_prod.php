<?php
    include 'config/config.php';

  $consulta=ConsultarProducto($_GET['ID']);

  function ConsultarProducto($ID)
  {
    $sentencia="SELECT * FROM Biblioteca WHERE ='".$ID."' ";
    $resultado=mysql_query($sentencia) or die (mysql_error());
    $row=mysql_fetch_assoc($resultado);
    return [
      $row['Title'],
      $row['Author'],
      $row['Description']
    ];
  }
?>
<!DOCTYPE html>
<head>
    <title><?php echo $consulta[0]?></title>
    <style type="text/css">
    @import url("style.css");
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="MobileOptimized" content="width" />
    <meta name="HandheldFriendly" content="true" />
<meta charset="utf-8">
<link rel="shortcut icon" href="https://colegiolaesperanza.com/plataforma/pluginfile.php/1/theme_moove/favicon/1643755324/favicon.ico">
<style type="text/css"> BODY{font-family: Courier, "Lucida Console", monospace;} </style>
</head>
<body>

<div class="modalDialog">
	<div>
		<a title="Close" class="close">X</a>
		<h1><?php echo $consulta[0] ?></h1>
        <h2><?php echo $consulta[1] ?></h2>
		<p><?php echo $consulta[2]?>.</p>
	</div>
</div>
</body>
</html>