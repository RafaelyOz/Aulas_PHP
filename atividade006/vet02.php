<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carros</title>
</head>
<body>
    <?php 
    $carros = [
        ["nome" => "Mustang", "fabricante" => "Ford", "cor" => "Vermelho", "ano" => 2022],
        ["nome" => "Argo", "fabricante" => "Fiat", "cor" => "Branco", "ano" => 2023],
        ["nome" => "Onix", "fabricante" => "GM", "cor" => "Prata", "ano" => 2024],
        ["nome" => "Corolla", "fabricante" => "Toyota", "cor" => "Preto", "ano" => 2020],
        ["nome" => "Versa", "fabricante" => "Nissan", "cor" => "Cinza", "ano" => 2018],
        ["nome" => "HB20", "fabricante" => "Hyundai", "cor" => "Marrom", "ano" => 2023],
        ["nome" => "Prius", "fabricante" => "Toyota", "cor" => "Prata", "ano" => 2024],
        ["nome" => "Endeavor", "fabricante" => "Mitsubishi", "cor" => "Azul", "ano" => 2019],
        ["nome" => "Lamborghini Revuelto", "fabricante" => "Lamborghini", "cor" => "Amarelo", "ano" => 2024],
        ["nome" => "Impreza", "fabricante" => "Subaru", "cor" => "Azul", "ano" => 2019],
    ];

    echo "<h2>Todos os registros</h2>";
    echo"<ul>";
    foreach($carros as $carro){
        echo "<li>{$carro['nome']}, {$carro['fabricante']}, {$carro['ano']} </li>";

    }

    echo"</ul>";

    echo"<h2>Registros sem o ano de fabricação do carros fabricados antes de 2023</h2>";
    echo"<ul>";
    foreach($carros as $carro){
        if($carro['ano']< 2023){
            unset($carro['ano']);
            echo"<li>{$carro['nome']}, {$carro['fabricante']}, {$carro['cor']}</li>";
        }
        }

        echo"<ul>";
    ?>
</body>
</html>