<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo perimetro e area do circulo</title>
</head>
<body>
    <h1> calculo do perímetro e área do circulo</h1>
    <form method="post">
        <label for="raio"> Informe o raio do circulo:</label>
        <input type="number" step="any" name="raio" id="raio" required>
        <button type="submit">Calcular</button>
    </form>
    <?php 
    if(isset($_POST["raio"])){
        $raio = floatval($_POST["raio"]);
    
        $perimetro = 2 * M_PI * $raio;
        $area =  M_PI * $raio * $raio;

        echo "<h2> Resultados: <h2>";
        echo "Raio do circulo: $raio (Tipo: " . gettype($raio) . ")<br>";
        echo "perimetro do circulo: $perimetro (Tipo: ". gettype($perimetro). ")<br>";
        echo "Area do circulo: $area (Tipo: ". gettype($area) . ")";
    }
    ?>
</body>
</html>
