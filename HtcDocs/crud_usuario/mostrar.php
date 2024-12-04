<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de los usuarios registrados</title>
</head>
<body>
    <h1>Datos de los usuarios registrados</h1>
    <hr>
    <?php
        $dbc = mysqli_connect('localhost', 'root');
        mysqli_select_db($dbc, 'usuariosbd');

        $query = "SELECT * FROM usuarios";
        /* en la variabes $r tengo un conjunto de arrays..un registro*/
        if ($r=mysqli_query($dbc,$query)) {
            /*en fila tengo el array con los datos de cada uno de los usuarios*/
            while ($fila=mysqli_fetch_array($r)) {
              echo "<strong>El nombre del usuario es: </strong>".$fila['Nombre']."<br>";
              echo "<strong>El nombre del usuario es: </strong>".$fila['Apellidos']."<br>";
              echo "<strong>El nombre del usuario es: </strong>".$fila['correo']."<br>";
              echo "<a href=\"actualizar.php?id={$fila['id']}\">Actualizar usuario</a>&nbsp";
              echo "<a href=\"borrar.php?id={$fila['id']}\">Borrar usuario</a>&nbsp";
              echo "<hr>";
            }
        }else{
            echo "<p style=\"color: red;\">No se ha podido realizar la consulta por que". mysqli_error($dbcs)."</p>";
        }
        mysqli_close($dbc);
    ?>
    <hr>
</body>
</html>