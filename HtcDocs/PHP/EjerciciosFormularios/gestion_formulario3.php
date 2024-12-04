<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
    
    if (!isset($_POST['nombre']) || empty($_POST['nombre'])) {
        echo "<span style=\"color:red\">El nombre es obligatorio</span><br>";
        $error = true;
    } else {
        $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if (!isset($_POST['apellido']) || empty($_POST['apellido'])) {
        echo "<span style=\"color:red\">El apellido es obligatorio</span><br>";
        $error = true;
    } else {
        $apellido = filter_var($_POST['apellido'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if (!isset($_POST['email']) || empty($_POST['email'])) {
        echo "<span style=\"color:red\">La email es obligatorio</span><br>";
        $error = true;
    } else {
        $email = filter_var($_POST['email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if (!isset($_POST['password']) || empty($_POST['password'])) {
        echo "<span style=\"color:red\">El password es obligatorio</span><br>";
        $error = true;
    } else {
        $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if (!isset($_POST['genero']) || empty($_POST['genero'])) {
        echo "<span style=\"color:red\">El genero es obligatorio</span><br>";
        $error = true;
    } else {
        $genero = filter_var($_POST['genero'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    
    if (!isset($_POST['intereses']) || empty($_POST['intereses'])) {
        echo "<span style=\"color:red;\">Debe haber al menos un intereses</span><br>";
        $error = true;
    } else {
        $intereses = $_POST['intereses'];
    }
    ?>
</head>

<body>
    <?php
        echo "¿Son estos los datos correctos? <br>";
        echo "<span>Nombre: ".$nombre."<span><br>";
        echo "<span>Apellido: ".$apellido."<span><br>";
        echo "<span>Correo: ".$email."<span><br>";
        echo "<span>Contraseña: ".$password."<span><br>";
        echo "<span>Genero: ".$genero."<span><br>";
        echo "<span>Intereses: ";
        for ($i = 0; $i < count($intereses); $i++) {
            echo $intereses[$i] . "<br>";
        }
        echo "<a href=\"archivofinal.php\">Pulsame</a>"
    ?>
</body>
</html>