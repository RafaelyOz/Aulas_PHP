<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo Fatorial</title>
</head>
<body>
    <h2>Calculo Fatorial</h2>
<header>
    <form action="" method="get">
        <label for="idnumero">Digite um número</label>
        <input type="number" id="idnumero" name="numero" required>
        <button type="submit">Calcular Fatorial</button>
    </form>
</header>
    <?php 
    function fatorial($numero){
        if($numero == 0){
            return 1;
        }else{
            return $numero * fatorial($numero - 1);
        }
    }
    
    if (isset($_GET['numero'])){
        $numero = $_GET['numero'];

        $resultado = fatorial($numero);

        echo "<p>!$numero = $resultado</p>";
    }
    ?>
</body>
</html>