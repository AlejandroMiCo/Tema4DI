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
    if (!isset($_POST['email']) || empty($_POST['email'])) {
        echo "<span style=\"color:red\">La email es obligatorio</span><br>";
        $error = true;
    } else {
        $email = filter_var($_POST['email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if (!isset($_POST['telefono']) || empty($_POST['telefono'])) {
        echo "<span style=\"color:red\">El telefono es obligatorio</span><br>";
        $error = true;
    } else {
        $telefono = filter_var($_POST['telefono'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if (!isset($_POST['informacion']) || empty($_POST['informacion'])) {
        echo "<span style=\"color:red\">El campo situacion familiar es obligatorio</span><br>";
        $error = true;
    } else {
        $informacion = filter_var($_POST['informacion'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    $date1=date("d/m/Y");
    ?>

</head>
<body>
    <?php
    
    
    echo "El mensaje".$informacion." fue enviado por". $nombre.", telefono".$telefono." Su e-mail es: ".$email.
"Enviado el ". $date1
    
    
    ?>
</body>
</html>