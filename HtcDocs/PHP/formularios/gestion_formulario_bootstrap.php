<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gestions</title>
    <?php


    $error = false;
    //selecionamos 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //comprobamos si las variables estan definidas o vacias
        if (!isset($_POST['nombre']) || empty($_POST['nombre'])) {
            "<span style=\"color: red;\">El campo nombre es obligatorio</span>";
            $error = true;
        } else {
            $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }

        if (!isset($_POST['apellidos']) || empty($_POST['apellidos'])) {
            "<span style=\"color: red;\"> El campo apellidos es obligatorio</span>";
            $error = true;
        } else {
            $apellido = filter_var($_POST['apellidos'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }

        if (!isset($_POST['correo']) || empty($_POST['correo'])) {
            "<span style=\"color: red;\"> El campo correo es obligatorio</span>";
            $error = true;
        } else {
            $correo = filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL);
            if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                echo "<span>La estructura del mail no es correcta </span>";
                $error = true;
            }
        }

        if (!isset($_POST['estado']) || empty($_POST['estado'])) {
            echo "<span style=\"color: red;\">El campo estado es obligatorio </span>";
            $error = true;
        } else {
            $estado = filter_var($_POST['estado'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }

        if (!isset($_POST['genero']) || empty($_POST['genero'])) {
            echo "<span style=\"color: red;\">El campo genero es obligatorio</span>";
            $error = true;
        } else {
            $genero = filter_var($_POST['genero'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }

        if (!isset($_POST['idiomas']) || empty($_POST['idiomas'])) {
            echo "<span style=\"color: red;\">Se debe selccionar al menos un idioma</span>";
            $error = true;
        } else {
            $idiomas = $_POST['idiomas'];
        }

        $estudios = $_POST['estudios'];

        if (!isset($_POST['informacion']) || empty($_POST['informacion'])) {
            echo "<span style=\"color: red;\">El campo situacion familiar es obligatorio</span>";
            $error = true;
        } else {
            $informacion = filter_var($_POST['informacion'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }
    }
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    echo "<h1 class=\"display-5\">Gestion de los datos </h1>";
    if (!$error) {

        ?>
        <?php
        if ($genero == "hombre") {
            ?>
            <ol class="list-group list-group-numbered">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Nombre y apellidos</div>
                        <?php
                        echo "Bienvenido señor $nombre $apellido";
        } else if ($genero == "mujer") { ?>
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Nombre y apellidos</div>
                                        <?php
                                        echo "Bienvenida señor $nombre $apellido";
        }
        ?>
                            </div>

                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Correo</div>
                            <?php $correo ?>
                            </div>

                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Su estado civil es</div>
                                <?php $estado ?>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Los idiomas que hablas son:</div>
                                <?php 
                                    for ($i=0; $i < count($idiomas); $i++) { 
                                        echo $idiomas[$i]. "<br>";
                                    }
                                $idiomas ?>
                            </div>
                        </li>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Su situacion familiar es</div>
                                <?php $informacion ?>
                            </div>
                        </li>
                    </ol>
                    <?php
    }
    ?>


                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
                    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
                    crossorigin="anonymous">
</body>

</html>