<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de moeda</title>
</head>
<body>
    <main>
        <h1>Conversor de moeda v1.0</h1>
        <?php 
        $reais = $_GET["valor"];
        $cota = 4.92;
        $dolar = $reais/$cota;
        $dolar = number_format($dolar, 2, '.', '');
        echo "Seus R$$reais equivalem a $$dolar \n";
        echo "<p><strong>Cotação fixa de R$$cota</strong> inserida diretamente no código.</p>";
        ?>
        <p>
            <a href="./index.html">Clique aqui para nova conversão</a>
        </p>
        
    </main>
</body>
</html>