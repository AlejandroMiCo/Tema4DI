<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="boton.css">
    <title>Actualizacion de pokes</title>
</head>

<body>
    <div class="form">
        <h1>Pokemon a actualizar</h1>
        <?php
        /**Conexion a la base de datos */
        $dbc = mysqli_connect('localhost', 'root');
        mysqli_select_db($dbc, 'pokemondb'); //seleccionar base de datos
        

        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $query = "SELECT * FROM pokes WHERE id={$_GET['id']};";
            if ($registro = mysqli_query($dbc, $query)) {
                $fila = mysqli_fetch_array($registro);

                echo "<form action=\"actualizar.php\" method=\"post\">";

                echo " <label for=\"nombre\">Nombre: </label>";
                echo "<input type=\"text\" value=\"{$fila['nombre']}\" name=\"nombre\"><br><br>";
                echo " <label for=\"nivel\">Nivel: </label>";
                echo "<input type=\"number\" value=\"{$fila['nivel']}\" name=\"nivel\"><br><br>";
                echo " <label for=\"tipos\">Tipos: </label>";
                echo "<input type=\"text\" value=\"{$fila['tipos']}\" name=\"tipos\"><br><br>";

                echo "<label for=\"sexo\">Sexo: </label><br><br>";
                echo "<span>Macho</span><input type=\"radio\" value=\"macho\" name=\"sexo\">";
                echo "<span>Hembra</span><input type=\"radio\" value=\"hembra\" name=\"sexo\">";
                echo "<span>Sin sexo</span><input type=\"radio\" value=\"sinsexo\" name=\"sexo\"><br><br>";

                echo "<label for=\"shiny\">Shiny: </label><br><br>";
                echo "<span>Si!!</span><input type=\"radio\" value=\"es shiny\" name=\"shiny\"";
                echo "<span>NO :(</span><input type=\"radio\" value=\"no es shiny\" name=\"shiny\"";


                echo "<br><br><br><label for=\"generacion\">Generacion: </label><br><br>";
                echo "<select name=\"generacion\"><br><br>";
                echo "<option value=\"primera\">Primera</option>";
                echo "<option value=\"segunda\">Segunda</option>";
                echo "<option value=\"tercera\">Tercera</option>";
                echo "<option value=\"cuarta\">Cuarta</option>";
                echo "<option value=\"quinta\">Quinta</option>";
                echo "<option value=\"sexta\">Sexta</option>";
                echo "<option value=\"septima\">Septima</option>";
                echo "<option value=\"octaba\">Octaba</option>";
                echo "<option value=\"novena\">Novena</option>";
                echo "<input type=\"hidden\" value=\"{$_GET['id']}\" name=\"id\"><br>";
                echo "<br><br><div <button class=\"ov-btn-grow-ellipse\">";
                echo "<input class=\"input\" role=\"button\" type=\"submit\" value=\"Actualizar\"><br>";
                echo "</div>";
                echo "</form>";
            } else {
                echo "<body style=\"background-image: url(pikachuCrying.jpg);\"><body>";
                echo "<p style=\"color:red;\">No se ha podido actualizar el pokemon</p><p> porque " . mysqli_error($dbc) . "</p>";
            }
        } elseif (isset($_POST['id']) && is_numeric($_POST['id'])) {
            $error = false;
            if (!empty($_POST['nombre']) && !empty($_POST['nivel']) && !empty($_POST['tipos']) && !empty($_POST['sexo']) && !empty($_POST['shiny'])) {
                $nombre = $_POST['nombre'];
                $nivel = $_POST['nivel'];
                $tipos = $_POST['tipos'];
                $sexo = $_POST['sexo'];
                $shiny = $_POST['shiny'];
                $generacion = $_POST['generacion'];
            } else {
                echo "<body style=\"background-image: url(pikachuCrying.jpg);\"><body>";
                echo "<p style=\"color:red;\">Deben estar cubiertos todos los campos</p>";
                $error = true;
            }
            if (!$error) {
                $query = "UPDATE pokes SET Nombre='$nombre', Nivel='$nivel', Tipos='$tipos', Sexo='$sexo' , Shiny='$shiny', Generacion='$generacion' WHERE id={$_POST['id']}";
                mysqli_query($dbc, $query);
                if (mysqli_affected_rows($dbc) == 1) {
                    echo "<div class=\"form\">";
                    echo "<span style=\"color:white\">Pokemon actualizado correctamente</span>";
                    echo "<a href=\"mostrar.php\"><p class=\"text\">Ver pokes<p></a>";
                    echo "</div>";

                } else {
                    echo "<body style=\"background-image: url(pikachuCrying.jpg);\"><body>";
                    echo "<p style=\"color:red;\">No se ha podido actualizar los datos del pokemon</p>";
                    echo "<a href=\"mostrar.php\"><p class=\"text\">Ver pokes<p></a></div>";
                }
            } else {
                echo "<body style=\"background-image: url(pikachuCrying.jpg);\"><body>";
                echo "<p style=\"color:red;\">No se ha podido acceder a la pagina</p>";
                echo "<a href=\"mostrar.php\"><p class=\"text\">Ver pokes<p></a></div>";
            }
        }
        mysqli_close($dbc);
        ?>
    </div>
</body>

</html>

<style>
    body {
        background-image: url(Guarderia.jpg);
        background-repeat: none;
        background-size: cover;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
    }

    .form {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        background-color: black;
        opacity: .7;
        color: white;
        padding: 25px;
    }

    a {
        text-decoration: none;
    }

    .text {
        color: lightblue;
        transition: scale .5s;
    }

    .text:hover {
        scale: 1.6;
        color: mediumvioletred;
    }

    .input {
        background-color: transparent;
        border: none;
    }
</style>