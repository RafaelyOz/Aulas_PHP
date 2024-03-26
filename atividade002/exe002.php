<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lados do triângulo</title>
</head>

<body>
    <?php
    $lado1 = 7;
    $lado2 = 7;
    $lado3 = 6;

    if ($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1) {

        if ($lado1 == $lado2 && $lado2 == $lado3) {
            $tipo = "Triangulo Equilátero";
        } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
            $tipo = "Triangulo Isóceles";
        } else {
            $tipo = "Triangulo Escaleno";
        }
        echo "Os lados são $lado1, $lado2, $lado3 <br>formam um triagulo do tipo: $tipo";
    } else {
        echo "As medidas descritas não formam um triangulo válido";
    }


    ?>
</body>

</html>