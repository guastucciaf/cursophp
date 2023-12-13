<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gerador de numeros aleatorios</title>
</head>
<body>
    <h1>Trabalhando com numeros aleatorios</h1>
    <p>Gerando um numero aleatorio entre 0 e 100...</p>
    <?php 
    $num = mt_rand(0,100);
    echo "<p>O número sorteado foi $num</p> <br>";
    
    ?>
    <button id="atualizar" onclick="javascript:location.reload()">&#x1F503 Sortear novo número</button>
</body>
</html>