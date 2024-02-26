<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Analisador de números reais</title>
</head>
<body>
    <main>
        <h1>Analisador de número real</h1>
        <?php
            $num_real = $_GET["valor"] ?? 0;
        
            echo "<p>Analisando o número <strong>".number_format($num_real, 3, ",", "."). "</strong> informado pelo usuário:</p>";
            $int = (int) $num_real;
            $fra = $num_real-$int;
            
            echo "<ul><li>A parte inteira do número informado é <strong>".number_format($int, 0, ",", ".")."</strong>.</li>";
            
            echo "<li>A parte fracionaria do número informado é <strong>" .number_format($fra, 3, ",", "."). "</strong>.</li></ul>";
        ?>
        <a href="./index.html">Voltar</a>
    </main>
</body>
</html>