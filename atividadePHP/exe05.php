<!DOCTYPE html>
<html lang="´pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label for="a">Digite o valor de A:</label>
    <input type="text" id="a" name="a" required><br><br>
    
    <label for="b">Digite o valor de B:</label>
    <input type="text" id="b" name="b" required><br><br>
    
    <label for="c">Digite o valor de C:</label>
    <input type="text" id="c" name="c" required><br><br>
    
    <input type="submit" value="Calcular">
</form>
<?php 
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        $a = $_POST ['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        $r = pow($a + $b, 2);
        $s = pow($b + $c, 2);

        $d =($r + $s) / 2 ;

        echo "<p>O resultado da expressão é: $d</p>";
    }



?>
</body>
</html>