<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações</title>
</head>

<body>
    <?php

    $numero = 4;

    $operacao = "raiz";

    switch ($operacao) {
        case 'dobro':
            $resultado_switch = $numero * 2;
            break;
        case 'cubo':
            $resultado_switch = $numero ** 3;
            break;
        case 'raiz':
            $resultado_switch = sqrt($numero);
            break;
        default:
            $resultado_switch = "Operação invalida";
            break;
    }

    echo "Usando SWITCH: <br>";
    echo "Número: $numero <br>";
    echo "Operação escolhida: $operacao <br>";
    echo "Resultado: $resultado_switch <bt><br><br>";

    $resultado_match = match ($operacao) {
        'dobro' => $numero * 2,
        'cubo' => $numero ** 3,
        'raiz' => sqrt($numero),
        default => "Operação inválida"
    };

    echo "Usando MATCH:<br>";
    echo "Número: $numero <br>";
    echo "Operação escolhida: $operacao <br>";
    echo "Resultado: $resultado_match";


    echo"<br> <br>";
    echo"<h2>Principais diferenças entre as estruturas de decisão:<br></h2>
        <h3>Switch-Case:</h3>
        
        Utilizado para avaliar uma expressão e executar diferentes blocos de código dependendo do valor dessa expressão.
        Permite a comparação de valores.
        Não é possível usar expressões complexas nas cláusulas do case.
        Os casos devem ser únicos (não há possibilidade de dois casos com a mesma ação).<br>
        <h3>Match:</h3>
        
        Introduzido no PHP 8.0, o match é uma versão mais expressiva e flexível do switch, projetada para trabalhar com expressões mais complexas.
        Permite comparar valores ou expressões mais complexas.
        Permite a correspondência com padrões.
        Pode ter um valor padrão (default) que é executado se nenhuma correspondência for encontrada.
        Pode usar expressões complexas, como chamadas de função, dentro das cláusulas de correspondência."
    ?>
</body>

</html>