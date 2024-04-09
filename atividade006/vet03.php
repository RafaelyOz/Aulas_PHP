<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correcao de texto</title>
</head>

<body>
    <?php
    $texto_original = "&u gosto d& estudar a linguag&m PHP &m finais de semana";

    $texto_corrigido = strtr($texto_original, [
        "&" => "e", 
    ]);

    echo "<p>Texto corrigido: $texto_corrigido</p>";
    ?>
</body>

</html>