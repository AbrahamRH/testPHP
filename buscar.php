<?php
    function db_fetch_result($consulta, $indice, $campo)
    {
        mysql_data_seek($consulta, $indice);
        $row = mysql_fetch_assoc($consulta);
        return $row[$campo];
    }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./estilos.css" rel="stylesheet" type="text/css">
    <title>Busqueda</title>
</head>
<body>

    <form method="post">
        <h2>Buscar por nombre<p></p></h2>
        <input name="nombre" type="text" id="nombre" title="Nombre(s) =" size="50" maxlength="50" placeholder="Nombre">
        <p></p>
        <input type="submit">
    </form>
    <h3><b>*Nota:</b> Aparece un error hasta contestar y mandar el formulario</h3>
    <hr>

    <?php
            require 'conectarBD.php';
            $nombre = $_POST['nombre'];
            $nombre = mysql_real_escape_string ($nombre);

            $query = "SELECT * FROM alumno WHERE nombre = '$nombre';";
            $resultado = mysql_query($query);

            mysql_close($conexionBD);
    ?>
    <ul>
        <li><?php echo db_fetch_result($resultado, 0, 'num_cuenta'); ?></li>
        <li><?php echo db_fetch_result($resultado, 0, 'nombre');?></li>
        <li><?php echo db_fetch_result($resultado, 0, 'apellidos');?></li>
        <li><?php echo db_fetch_result($resultado, 0, 'comentario'); ?></li>
    </ul>

    

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