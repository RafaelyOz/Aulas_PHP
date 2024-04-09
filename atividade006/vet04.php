<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remoção de caracteres repetidos</title>
</head>

<body>
    <?php
    function removerCaracteresRepetidos($string)
    {
        $caracteresUnicos = "";
        $tamanho = strlen($string);

        for ($i = 0; $i < $tamanho; $i++) {
            if (strpos($caracteresUnicos, $string[$i]) === false) {
                $caracteresUnicos .= $string[$i];
            }
        }
        return $caracteresUnicos;
    }

    $texto_original = 'ARARA';

    $texto_sem_repeticao = removerCaracteresRepetidos($texto_original);

    echo "<p>Texto original: $texto_original</p>";
    echo "<p>Texto sem caracteres repetidos: $texto_sem_repeticao</p>";
    ?>
</body>

</html>
