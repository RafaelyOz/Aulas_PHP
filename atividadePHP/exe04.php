<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de equações</title>
</head>
<body>
    <?php 
    $x=3;
    
    $z_numerador = (2 * pow($x, 2) - 3 * pow($x, ($x + 1))) / (2 * $x) + sqrt($x + 1) / 4;
    $z_denominador = sqrt(4 * $x + pow(2, $x));
    $z = $z_numerador / $z_denominador;

    echo "<p>O valor de Z, com X = $x, é: $z</p>"
    ?>
</body>
</html>