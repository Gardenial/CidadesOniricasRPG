<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"> <!-- Certifique-se de ajustar o caminho do seu arquivo CSS -->
    <title>Processar Ficha</title>
</head>
<body>

    <div class="container">
        <h1>Ficha do Personagem Processada</h1>

        <?php
            $nome = $_POST['nome'];
            $raca = $_POST['raca'];
            $classe = $_POST['classe'];
            $guilda = $_POST['guilda'];
            $nivel = $_POST['nivel'];
            $experiencia = $_POST['experiencia'];
            $origem_onirica = $_POST['origem_onirica'];
            $forca = $_POST['forca'];
            $destreza = $_POST['destreza'];
            $constituicao = $_POST['constituicao'];
            $inteligencia = $_POST['inteligencia'];
            $sabedoria = $_POST['sabedoria'];
            $carisma = $_POST['carisma'];
            $pv = $_POST['pv'];
            $ps = $_POST['ps'];
            $pm = $_POST['pm'];

            // Exibindo os dados na página
            echo "<h2>Informações Básicas</h2>";
            echo "<p><strong>Nome do Personagem:</strong> $nome</p>";
            echo "<p><strong>Raça:</strong> $raca</p>";
            echo "<p><strong>Classe:</strong> $classe</p>";
            echo "<p><strong>Guilda:</strong> $guilda</p>";
            echo "<p><strong>Nível:</strong> $nivel</p>";
            echo "<p><strong>Experiência:</strong> $experiencia</p>";
            echo "<p><strong>Origem Onírica:</strong> $origem_onirica</p>";

            echo "<h2>Atributos</h2>";
            echo "<p><strong>Força:</strong> $forca</p>";
            echo "<p><strong>Destreza:</strong> $destreza</p>";
            echo "<p><strong>Constituição:</strong> $constituicao</p>";
            echo "<p><strong>Inteligência:</strong> $inteligencia</p>";
            echo "<p><strong>Sabedoria:</strong> $sabedoria</p>";
            echo "<p><strong>Carisma:</strong> $carisma</p>";

            echo "<h2>Saúde e Recursos</h2>";
            echo "<p><strong>Pontos de Vida (PV):</strong> $pv</p>";
            echo "<p><strong>Pontos de Sonho (PS):</strong> $ps</p>";
            echo "<p><strong>Pontos de Magia (PM):</strong> $pm</p>";
        ?>
    </div>

    <!-- Adicione outras seções e estilizações conforme necessário -->

</body>
</html>
