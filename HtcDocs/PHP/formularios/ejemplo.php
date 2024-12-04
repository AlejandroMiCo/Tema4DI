<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de usuario</title>
    <?php
    function ($dato) {
        $dato = trim($dato);
        $dato = htmlspecialchars($dato);
        $dato = stripcslashes($dato);
    };

    //codigo de gestion de los datos del formulario
    $errornombre = $errorapellidos = $errorgenero = $errorcorreo = $errorarea = $errorestado = $erroridiomas = "";
    $error = false;
    //selecionamos 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //comprobamos si las variables estan definidas o vacias
        if (!isset($_POST['nombre']) || empty($_POST['nombre'])) {
            $errornombre = "El campo nombre es obligatorio";
            $error = true;
        } else {
            $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }

        if (!isset($_POST['apellidos']) || empty($_POST['apellidos'])) {
            $errorapellidos = "El campo apellidos es obligatorio";
            $error = true;
        } else {
            $apellido = filter_var($_POST['apellidos'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }

        if (!isset($_POST['correo']) || empty($_POST['correo'])) {
            $errorcorreo = "El campo correo es obligatorio";
            $error = true;
        } else {
            $correo = filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL);
            if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                $errorcorreo = "La estructura del mail no es correcta";
                $error = true;
            }
        }

        if (!isset($_POST['estado']) || empty($_POST['estado'])) {
            $errorestado = "El campo estado es obligatorio";
            $error = true;
        } else {
            $estado = filter_var($_POST['estado'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }

        if (!isset($_POST['genero']) || empty($_POST['genero'])) {
            $errorgenero = "El campo genero es obligatorio";
            $error = true;
        } else {
            $genero = filter_var($_POST['genero'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }

        if (!isset($_POST['idiomas']) || empty($_POST['idiomas'])) {
            $erroridiomas = "El campo genero es obligatorio";
            $error = true;
        } else {
            $idiomas = $_POST['idiomas'];
        }

        $estudios = $_POST['estudios'];

        if (!isset($_POST['situacion']) || empty($_POST['situacion'])) {
            $errorarea = "El campo situacion familiar es obligatorio";
            $error = true;
        } else {
            $informacion = filter_var($_POST['situacion'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }

        if (!$error) {
            echo "<h1>DATOS DE USUARIO</h1>";
            if ($genero == "hombre") {
                echo "<strong>Bienvenido señor $nombre $apellidos</strong><br>";
            } else {
                echo "<strong>Bienvenido señora $nombre $apellidos</strong><br>";
            }

            echo "<strong>Su correo es: $correo</strong><br>";
            echo "<strong>Los idiomas que habla son:    </strong><br>";

            for ($i = 0; $i < count($idiomas); $i++) {
                echo $idiomas[$i] . "<br>";
            }

            echo "<strong>Su estado civil es: $estado</strong><br>";
            echo "<strong>Sus estudios actuales son: $estudios</strong><br>";
            echo "<strong>Su situacion familiar es: $informacion</strong><br>";


        }
    }

    ?>
</head>

<body>
    <h1>Formulario de acceso de usuario</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre">
        <span style="color:red;"><?php echo $errornombre ?></span>
        <br>

        <label for="apellidos">Apellidos: </label>
        <input type="text" name="apellidos">
        <span style="color:red;"><?php echo $errorapellidos ?></span>

        <br>
        <label for="correo">Correo: </label>
        <input type="email" name="correo">
        <span style="color:red;"><?php echo $errorcorreo ?></span>

        <br>
        Hombre: <input type="radio" name="genero" id="generoh" value="hombre">
        Mujer: <input type="radio" name="genero" id="generom" value="mujer">
        <span style="color:red;"><?php echo $errorgenero ?></span>
        <br>
        Idiomas:
        Ingles: <input type="checkbox" name="idiomas[]" id="ingles">
        Aleman: <input type="checkbox" name="idiomas[]" id="aleman">
        Italiano: <input type="checkbox" name="idiomas[]" id="italiano">
        Frances: <input type="checkbox" name="idiomas[]" id="frances">
        Portuges: <input type="checkbox" name="idiomas[]" id="portugues">
        <span style="color:red;"><?php echo $erroridiomas ?></span>
        <br>
        Estado civil:
        <br>
        Soltero: <input type="radio" name="estado" value="soltero">
        Casado: <input type="radio" name="estado" value="casado">
        Divorciado: <input type="radio" name="estado" value="divorciado">
        Viudo: <input type="radio" name="estado" value="viudo">
        <span style="color:red;"><?php echo $errorestado ?></span>
        <br>
        Estudios:
        <select name="estudios" id="">
            <option value="ESO">ESO</option>
            <option value="BACHILLER">BACHILLER</option>
            <option value="UNIVERSIDAD">UNIVERSIDAD</option>
            <option value="CICLO MEDIO">CICLO MEDIO</option>
            <option value="CICLO SUPERIOR">CICLO SUPERIOR</option>
            <span style="color:red;"><?php echo $errorestudios ?></span>

        </select>
        <br><br>
        <textarea name="situacion" placeholder="Situacion familiar" id="situacion" rows="10" cols="40"
            style="resize:none;"></textarea>
        <span style="color:red;"><?php echo $errorarea ?></span>
        <br>
        <input type="submit" value="Enviar">

    </form>
</body>

</html>