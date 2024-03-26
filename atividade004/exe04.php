<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplos</title>
</head>

<body>

    <?php

    $i = 1;
    echo "<h2>Usando WHILE:</h2>";
    while ($i <= 10) {
        echo "1 x $i = " . ($i * 1) . "<br>";
        $i++;
    }
    ?>
    <?php
    echo "<h2>Usando DO-WHILE:</h2>";
    $i = 1;
    do {
        echo "1 x $i = " . ($i * 1) . "<br>";
        $i++;
    } while ($i <= 10);
    ?>
    <?php
    echo "<h2>Usando FOR:</h2>";
    for ($i = 1; $i <= 10; $i++) {
        echo "1 x $i = " . ($i * 1) . "<br>";
    }
    ?>
    <?php
    echo "<h2>Usando FOREACH:</h2>";
    $nums = range(1, 10);
    foreach ($nums as $num) {
        echo "1 x $num = " . ($num * 1) . "<br>";
    }

    ?>

</body>

</html>