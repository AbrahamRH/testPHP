<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./estilos.css" rel="stylesheet" type="text/css">
    <title>Editar</title>
</head>
<body>

    <form method="post">
        <h2>Cambiar nombre de alumno<p></p></h2>
        <input name="num_cuenta" type="text" id="num_cuenta" title="Número de cuenta =" size="50" maxlength="50" placeholder="Número de cuenta">
        <p></p>
        <input name="nombre" type="text" id="nombre" title="Nombre(s) =" size="50" maxlength="50" placeholder="Nombre a cambiar">
        <p></p>
        <input type="submit" onClick="<?php send();?>">
    </form>

    <?php 
        function send(){
            require 'conectarBD.php';
            $nombre     = $_POST['nombre'];
            $num_cuenta = $_POST['num_cuenta'];

            $nombre     = mysql_real_escape_string ($nombre);
            $num_cuenta = mysql_real_escape_string ($num_cuenta);

    
            $query = "UPDATE alumno SET nombre = '$nombre' WHERE num_cuenta = $num_cuenta";
    
            $resultado = mysql_query($query);
    
            mysql_close($conexionBD);
        }
    ?>

    <br>
    <hr>
    <nav>
        <a href="./main.php"     target="blank">Inicio  </a>
        <a href="./buscar.php"   target="blank">Buscar  </a>
        <a href="./insertar.php" target="blank">Insertar</a>
        <a href="./editar.php"   target="blank">Editar  </a>
        <a href="./eliminar.php" target="blank">Eliminar</a>
    </nav>
    
</body>
</html>