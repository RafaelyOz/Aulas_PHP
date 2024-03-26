<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votação</title>
</head>

<body>
    <?php
    $anoAtual = date("Y");
    $anoNascimento = 1987;
    $idade = $anoAtual - $anoNascimento;

    echo "Ano atual: $anoAtual <br>";
    echo "Ano nascimento: $anoNascimento<br>";
    echo "Idade: $idade <br>";

    if ($idade >= 16) {
        echo "Está Apto para votar";
    } else {
        echo "Não está apto para votar";
    }



    ?>
</body>

</html>