<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Notas</title>
</head>
<body>
    <div class="container">
        <h1> relatorios das notas dos alunos </h1>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Validação das entradas
            $nota1 = $_POST['nota1'];
            $nota2 = $_POST['nota2'];
            $nota3 = $_POST['nota3'];
            $nota4 = $_POST['nota4'];

            if ($nota1 !== false && $nota2 !== false && $nota3 !== false && $nota4 !== false) {
                // Calculo da media
                $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
            
                // Exibição dos resultados 
                echo "<div class='result'>";
                echo "<table>";
                echo "<tr><th>Descrição</th><th>nota</th></tr>";
                echo "<tr><td>nota 1</td><td>$nota1</td></tr>";
                echo "<tr><td>nota 2</td><td>$nota2</td></tr>";
                echo "<tr><td>nota 3</td><td>$nota3</td></tr>";
                echo "<tr><td>nota 4</td><td>$nota4</td></tr>";
                echo "<tr><th>media</th><th>" . number_format($media, 2) . "</th></tr>";
                echo "</table>";
                echo "</div>";
            } else {     
                echo "<div class='result' >";
                echo "<p>por favor, insira os valores validos para todas as notas.</p>";
                echo "</div>";
                
            }
        }
        ?>
        <a href="index.php"><button>Novo calculo</button></a>
    </div>
</html>