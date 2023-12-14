<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gerador de numeros aleatorios</title>
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório entre <strong>0</strong> e <strong>100</strong>...</p>
        <?php
        $num = mt_rand(0,100);
        echo "<p>O número sorteado foi <strong>$num</strong></p> <br>";
        
        ?>
        <button id="atualizar" onclick="javascript:location.reload()">&#x1F503 Sortear novo número</button>
    </main>
</body>
</html>