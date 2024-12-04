<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
    
    if (!isset($_POST['precio']) || empty($_POST['precio'])) {
        echo "<span style=\"color:red\">El precio es obligatorio</span><br>";
        $error = true;
    } else {
        $precio = filter_var($_POST['precio'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if (!isset($_POST['cantidad']) || empty($_POST['cantidad'])) {
        echo "<span style=\"color:red\">La cantudad es obligatorio</span><br>";
        $error = true;
    } else {
        $cantidad = filter_var($_POST['cantidad'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if (!isset($_POST['descuento']) || empty($_POST['descuento'])) {
        echo "<span style=\"color:red\">El descuento es obligatorio</span><br>";
        $error = true;
    } else {
        $descuento = filter_var($_POST['descuento'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if (!isset($_POST['iva']) || empty($_POST['iva'])) {
        echo "<span style=\"color:red\">El iva es obligatorio</span><br>";
        $error = true;
    } else {
        $iva = filter_var($_POST['iva'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    $op = $_POST['opciones'];
    ?>

</head>
<body>

<?php 

echo "El resultado de la operacion es: ".(($precio+($precio*$iva/100))*$cantidad)-$descuento+$op; 

?>
    
</body>
</html> 