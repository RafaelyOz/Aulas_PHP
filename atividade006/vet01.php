<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior numero</title>
</head>
<body>
    <?php 
    $numeros = [10,23,45,78,56];
  

    $maior_for = $numeros[0];
    for ($i = 1; $i < 5; $i++) { 
        if ($numeros[$i] > $maior_for) {
            $maior_for = $numeros[$i];
        }
    }
    
    echo "<p>O maior número (usando FOR) é: $maior_for</p>";
    
    $maior_foreach = $numeros[0];
    foreach ($numeros as $numero) {
        if ($numero > $maior_foreach) {
            $maior_foreach = $numero;
        }
    }
    
    echo "<p>O maior número (usando FOREACH) é: $maior_foreach</p>";
    
    ?>
</body>
</html>