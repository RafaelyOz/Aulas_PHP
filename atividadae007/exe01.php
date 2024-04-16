<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Aluno</title>
</head>
<body>
    <header>
        <h1>Informe os dados do estudante:</h1>
        <form action="dados_media.php" method ="get">
            <section>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="idnome"><br><br>

            <label for="Nota1">Nota 1:</label>
            <input type="number" id="nota1" name="nota1" step="0.1" required><br><br>

            <label for="Nota2">Nota 2:</label>
            <input type="number" id="nota2" name="nota2" step="0.1" required><br><br>

            <label for="Nota3">Nota 3:</label>
            <input type="number" id="nota3" name="nota3" step="0.1" required><br><br>

            <label for="Nota4">Nota 4:</label>
            <input type="number" id="nota4" name="nota4" step="0.1" required><br><br>

            <input type="submit" value="Calcular Média">
            </section>
        </form>
    </header>
    <?php ?>
</body>
</html>