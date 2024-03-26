<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Primos</title>
</head>

<body>
    <?php
    $numero = 14;

    $primo = true;
    $multiplos = [];

    if ($numero < 2) {
        $primo = false;
    } else {
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                $primo = false;
                $multiplos[] = $i;
            }
        }
    }
    if ($primo) {
        echo "O número $numero é primo.";
    } else {
        echo "O número $numero não é primo. Seus múltiplos são: ";
        foreach ($multiplos as $multiplo) {
            echo "$multiplo ";
        }
        echo "Total de múltiplos: " . count($multiplos);
    }
    ?>
</body>

</html>