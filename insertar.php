<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./estilos.css" rel="stylesheet" type="text/css">
    <title>Insertar</title>
</head>
<body>

    <form method="post">
        <h2>Insertar nuevo de alumno<p></p></h2>
        <input name="num_cuenta" type="text" id="num_cuenta" title="Número de cuenta =" size="50" maxlength="50" placeholder="Número de cuenta">
        <p></p>
        <input name="nombre" type="text" id="nombre" title="Nombre(s) =" size="50" maxlength="50" placeholder="Nombre">
        <p></p>
        <input name="apellido" type="text" id="apellido" title="Apellido(s) =" size="50" maxlength="50" placeholder="Apellido(s)">
        <p></p>
        <textarea name="comentario" cols="50" rows="20" maxlength="100" id="comentario" placeholder="Comentario" title="Comentario"></textarea>
        <p></p>
        <input type="submit" onClick="<?php send();?>">                           <!--Al oprimir el boton se llama a la funcion para insertar en la base de datos-->
    </form>

    <?php 
        function send(){
            require 'conectarBD.php';
            $num_cuenta = $_POST['num_cuenta'];
            $nombre     = $_POST['nombre'];
            $apellido   = $_POST['apellido'];
            $comentario = $_POST['comentario'];

            $num_cuenta = mysql_real_escape_string ($num_cuenta);
            $nombre     = mysql_real_escape_string ($nombre);
            $apellido   = mysql_real_escape_string ($apellido);
            $comentario = mysql_real_escape_string ($comentario);

            $query = "INSERT INTO alumno (num_cuenta, nombre, apellidos, comentario) VALUES ($num_cuenta, '$nombre', '$apellido', '$comentario');";

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