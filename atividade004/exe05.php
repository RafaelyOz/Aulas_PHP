<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exponenciação</title>
</head>

<body>
    <?php
    $base = 8;
    $expoente = 2;

    $resultado = $base ** $expoente;
    echo "<p>O Resultado usando **: " . $resultado . " </p>";

    $resultado_for = 1;
    for ($i = 0; $i < $expoente; $i++) {
        $resultado_for *= $base;
    }

    echo "<p>Resultado usando For: " . $resultado_for . "</p>";

    $resultado_while = 1;
    $contador = 0;
    while ($contador < $expoente) {
        $resultado_while *= $base;
        $contador++;
    }

    echo "<p>Resultado usando estrutura WHILE: " . $resultado_while . "</p>";

    $resultado_do_while = 1;
    $contador = 0;
    do {
        $resultado_do_while *= $base;
        $contador++;
    } while ($contador < $expoente);
    echo "<p>Resultado usando estrutura DO-WHILE: " . $resultado_do_while . "</p>";

    ?>
</body>

</html>