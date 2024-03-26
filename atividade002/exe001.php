<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Média</title>
</head>

<body>
    <?php

    $nota1 = 5.6;
    $nota2 = 7.2;
    $nota3 = 9.3;

    $media = ($nota1 + $nota2 + $nota3) / 3;

    echo "Notas do aluno: $nota1, $nota2, $nota3 <br>";

    echo "A média será: $media <br><br>";

    echo "Utilizado IF e ELSE: <br>";
    if ($media < 4.0) {
        echo "Status: Aluno reprovado";
    } elseif ($media >= 4.0 && $media < 6.0) {
        echo "Status: Aluno aguardando prova substitutiva";
    } elseif ($media >= 6.0 && $media < 9.9) {
        echo "Status: Aluno aprovado";
    } elseif ($media == 10.0) {
        echo "Status: Aluno aprovado sem dificuldades";
    }
    echo "<br>Tipo da variável média: " . gettype($media);

    echo "<br> <br>";
    echo "Utilizando Match: <br>";

    $status = match (true) {
        $media < 4.0 => "Aluno Reprovado!",
        $media >= 4.0 && $media < 6.0 => "Aluno aguardando substitutiva",
        $media >= 6.0 && $media < 9.9 => "Aluno aprovado",
        $media == 10.0 => "Aluno aprovado sem dificuldades",
        default => "Status desconhecido"
    };

    echo "Status usando MATCH: $status <br>";
    echo "Tipo variavel da media: " . gettype($media);



    ?>
</body>

</html>