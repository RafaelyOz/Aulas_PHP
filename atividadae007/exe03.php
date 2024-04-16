<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma</title>
</head>
<body>
    <header>
        <h2>Soma numérica</h2>
        <form action="" method="get">
            <label for="num1">Digite um numero:</label>
            <input type="number" name="num1" id="idnumero1">
            <label for="num2">Digite o segundo numero:</label>
            <input type="number" name="num2" id="idnumero2">
            <input type="submit">
        </form>
    </header>
    <?php 
    if(isset($_GET['num1']) && isset ($_GET['num2'])){
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
    }
    function somar($num1, $num2){
        $soma = $num1 + $num2;
        if($soma < 0){
            return 0;      
        } else {
            return $soma;
        }
    }
    if(isset($num1) && isset($num2)) {
        $resultado = somar($num1, $num2);
        echo "<p>A soma de $num1 e $num2 é $resultado</p>";
    }
    ?>
</body>
</html>
