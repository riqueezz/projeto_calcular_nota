<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadra de notas</title>
</head>
<body>
    <div class="container">
        <form method="POST" action="relatorio.php">
            <h1>calculator</h1>
            <label for="nota1">nota 1:</label>
            <input type="number" step="0.01" name="nota1" id="nota1" required>

            <label for="nota2" >nota 2:</label>
            <input type="number"  step="0.01" name="nota2" id="nota2" required>

            <label for="nota3" >nota3:</label>
            <input type="number" step="0.01" name="nota3" id="nota3" required>

            <label for="nota4" >nota4:</label>
            <input type="number" step="0.01" name="nota4" id="nota4" required>

            <button type="submit">calcular média</button>
        </form>
    </div>
</body>
</html>