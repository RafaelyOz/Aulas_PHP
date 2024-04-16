<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo media</title>
</head>
<body>
    <?php 
    function calcularMedia($nome, $nota1,$nota2,$nota3,$nota4){

        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
        if($media >= 7.0){
            $situacao = "Aprovado";
        }elseif($media >= 5.0){
            $situacao = "Recuperação";
        }else{
            $situacao = "Reprovado";
        }

        return "Aluno: $nome - Situação: $situacao";
    }

    if(isset($_GET['nome'], $_GET['nota1'], $_GET['nota2'],$_GET['nota3'], $_GET['nota4'] )){
        $nome = $_GET['nome'];
        $nota1 = $_GET['nota1'];
        $nota2 = $_GET['nota2'];
        $nota3 = $_GET['nota3'];
        $nota4 = $_GET['nota4'];

    echo"<p>". calcularMedia($nome, $nota1, $nota2, $nota3, $nota4)."</p>";
    }
    
    
    ?>
</body>
</html>