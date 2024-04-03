<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 11 - Reajustador de Preços</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <?php 
    $price = $_GET ['price'];
    $adjustment = $_GET ['adjustment'];
    $newPrice = ($price + (($price * $adjustment)/100));
    ?>
  <main>
    <h1>Reajustador de preços</h1>
    <form action="<?=$_SERVER ['PHP_SELF']?>" method="get">
        <label for="price">Preço do produto (R$)</label>
        <input type="number" name="price" id="price" min="0.10" step="0.01" value="<?=$price?>">
        <label for="adjustment">Qual será o percetual de reajuste? (<strong><span id="p">?%</span></strong>)<?=$adjustment?></label>
        <input type="range" name="adjustment" id="adjustment" min="-1000" max="1000" step="1">
        <input type="submit" value="Reajustar">


    </form>
  </main>

  <section>
    <h2>Resultado do Reajuste</h2>
    <p>O produto que custava R$[??], com <strong>[??] de aumento</strong> vai passar a custar R$[??] a partir de agora</p>
  </section>
</body>
</html>