<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Impar</title>
</head>

<body>
    <?php

    $numero = 4;

    if ($numero % 2 == 0) {
        echo "Com IF: o numero $numero é par";
    } else {
        echo "Com If: o numero $numero é impar";
    }

    echo "<br>";

    if ($numero % 2 == 0) {
        echo "Com ELSE: o numero $numero é par";
    } else {
        echo "Com ELSE: o numero $numero é impar";
    }

    echo "<br";

    if ($numero % 2 == 0) {
        echo "Com ELSEIF: o numero $numero é par";
    } elseif ($numero % 2 != 0) {
        echo "Com ELSE: o numero $numero é impar";
    }

    echo "<br><br>";

    switch ($numero % 2) {
        case 0:
            echo "Com SWITCH: o numero $numero é par";
            break;
        case 1:
            echo "Com SWITCH: o numero $numero é impar";
            break;
    }

    echo "<br>";

    $Resultado = match ($numero % 2) {
        0 => "par",
        1 => "impar",
    };
    echo "Com MATCH: o numero $numero é $Resultado";


    ?>
</body>

</html>