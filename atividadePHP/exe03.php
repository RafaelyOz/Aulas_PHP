<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações Matematicas</title>
</head>
<body>
    <h1>Operações</h1>
    <form method="post">
        <label for="numero1">Informe o primeiro número: </label>
        <input type="number"  name="numero1" id="numero1" required>
        <br><br>
        <label for="numero2">Informe o segundo número: </label>
        <input type="number" name="numero2" id="numero2" required>
        <br><br>
        <button type="submit">Calcular</button>
    </form>
    <?php 
        if(isset($_POST["numero1"])&& isset($_POST["numero2"])){
            $num1 = $_POST["numero1"];
            $num2 = $_POST["numero2"];

            echo "<h2> Informações </h2>";
            echo "<p> Primeiro número: $num1</p>";
            echo "<p> Segundo número: $num2</p>";
            echo "<p> Soma: ".($num1 + $num2)."</p>";
            echo "<p>Subtração: ".($num1 - $num2)."</p>";
            echo "<p> Multiplicação: ".($num1 * $num2)."</p>";
            echo "<p>Divisão: ".($num1 / $num2)."</p>";
            echo "<p>Módulo do sinal da subtração: ".abs($num1 - $num2)."</p>";
            echo "<p>Resto de divisão: ".($num1 % $num2)."</p>";
            echo "<p>Exponenciação: ".($num1 ** $num2)."</p>";
            echo "<p>Média: ".(($num1 + $num2)/ 2)."</p>";
            echo "<p>Raiz quadrada da soma: ".  sqrt($num1 + $num2)."</p>";

        }
    
    
    ?>
</body>
</html>