<!--Ramirez Hernandez Abraham, Proyecto PHP -->

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
    <title>Agenda</title>
</head>
<body>
    <h1>Alumnos</h1>
    <?php
        require 'conectarBD.php';
        $query = "SELECT * FROM alumno;";
        $resultado  = mysql_query($query);
        $num_datos  = mysql_num_rows($resultado);
     ?>
    <table width="300" border=".5" cellspacing="0" cellpadding="1">
        <tr>
            <td>  #  </td>
            <td>Num Cuenta</td>
            <td>Nombres</td>
            <td>Apellidos</td>
            <td>Comentario</td>
        </tr>
    <?php
        for($i = 0; $i < $num_datos; $i++){
     ?>
        <tr>
        <td><?php echo $i+1;?></td>
        <td><?php echo db_fetch_result($resultado, $i, 'num_cuenta'); ?></td>
        <td><?php echo db_fetch_result($resultado, $i, 'nombre');?></td>
        <td><?php echo db_fetch_result($resultado, $i, 'apellidos');?></td>
        <td><?php echo db_fetch_result($resultado, $i, 'comentario');  ?></td>
        </tr>
    <?php
        }
    ?>
    </table>
    <br>
    <hr>
    <nav>
        <a href="./main.php"     target="blank">Inicio  </a>
        <a href="./buscar.php"   target="blank">Buscar  </a>
        <a href="./insertar.php" target="blank">Insertar</a>
        <a href="./editar.php"   target="blank">Editar  </a>
        <a href="./eliminar.php" target="blank">Eliminar</a>
    </nav>

    <?php
        mysql_close($conexionBD);
     ?>
</body>
</html>