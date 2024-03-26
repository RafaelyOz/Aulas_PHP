<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idades</title>
</head>

<body>
    <?php

    $idades = array(12, 14, 17, 18, 34, 23, 45, 78, 15, 93, 67, 56, 11, 20, 76);
    $maiores = 0;
    $menores = 0;

    foreach ($idades as $idade) {
        if ($idade >= 18) {
            $maiores++;
        } else {
            $menores++;
        }
    }

    echo "<h2> Pessoas Maiores de Idade: </h2>";
    echo "<p> Total de pesssoas maiores de idade: " . $maiores . "</p>";

    echo "<h2>Pessoa Menores de Idade: </h2>";
    echo "<p>Total de pessoas menores de idade:" . $menores . "</p>";

    ?>
</body>

</html>