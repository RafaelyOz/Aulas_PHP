<!-- Tabela Matrizes-->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Matrizes</title>
</head>

<body>
    <h2>Lista de registros</h2>
    <ul>
        <?php

        $registros = array(
            array("nomePessoa" => "João", "idade" => "41", "peso" => "78", "altura" => "1.77"),
            array("nomePessoa" => "André", "idade" => "29", "peso" => "65", "altura" => "1.85"),
            array("nomePessoa" => "Larissa", "idade" => "32", "peso" => "52", "altura" => "1.52"),
            array("nomePessoa" => "Cinthia", "idade" => "18", "peso" => "62", "altura" => "1.68")
        );

        foreach ($registros as $registro) {
            echo "<li>";
            echo "Nome: " . $registro['nomePessoa'] . "<br>";
            echo "Idade: " . $registro['idade'] . "<br>";
            echo "Peso: " . $registro['peso'] . "<br>";
            echo "Altura: " . $registro['altura'] . "<br>";
            echo "</p>";
        }

        ?>
    </ul>
</body>

</html>