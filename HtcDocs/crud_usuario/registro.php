<?php

function Formato($dato)
{
    $dato = trim($dato);
    $dato = htmlspecialchars($dato);
    $dato = stripslashes($dato);

    return $dato;
}

/* Conexion a la base de datos*/

$dbc = mysqli_connect('localhost', 'root');
mysqli_select_db($dbc, 'usuariosbd');

$error = false;

/*Comprobacion de los datos*/

if (!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['correo'])) {
    $nombre = Formato($_POST['nombre']);
    $apellidos = Formato($_POST['apellidos']);
    $correo = Formato($_POST['correo']);
}else{
    echo "<p style=\"color: red;\">Todos los campos deberian estar cubiertos</p>";
    $error = true;
}

if (!$error) {

    $queryNomAp = "SELECT * FROM usuarios WHERE Nombre = '$nombre' AND Apellidos = '$apellidos'";

    $queryCorreo = "SELECT * FROM usuarios WHERE Correo = '$correo'";
    

    if (mysqli_num_rows(mysqli_query($dbc,$queryNomAp)) == 0) {

        if (mysqli_num_rows(mysqli_query($dbc,$queryCorreo)) == 0) {
            # code...
            /* Configuramos la consulta SQL */
            $query = "INSERT INTO usuarios (id, Nombre, Apellidos, Correo) VALUES (0, '$nombre', '$apellidos', '$correo')";
            /* Funcion que ejecuta la consulta... devuelve true o false */
            if (mysqli_query($dbc, $query)) {
                echo "<p style=\"color: blue;\">Usuario insertado de forma correcta :D</p>";
            }else{
                echo "<p style=\"color: red;\">No se ha podido añadir la entrada por que". mysqli_error($dbcs)."</p>";
            } 
        }else{
            echo "Correo ya registrado en la base de datos";
        }
    }else{
        echo "Nombre o apellido repetido";
    }
}

mysqli_close($dbc);