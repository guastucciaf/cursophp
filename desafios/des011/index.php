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
    $price = $_GET ['price'] ?? 0;
    $adjustment = $_GET ['adjustment'] ?? 0;
    $newPrice = ($price + (($price * $adjustment)/100));
    $padrao = numfmt_create ("pt-BR", NumberFormatter::CURRENCY);
    ?>
  
  <main>
    <h1>Reajustador de preços</h1>
    <form action="<?=$_SERVER ['PHP_SELF']?>" method="get">
        <label for="price">Preço do produto (R$)</label>
        <input type="number" name="price" id="price" min="0.10" step="0.01" value="<?=$price?>">
        <label for="adjustment">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
        <input type="range" name="adjustment" id="adjustment" min="-100" max="100" step="1" oninput="mudaValor()" value="<?=$adjustment?>">
        <input type="submit" value="Reajustar">


    </form>
  </main>

    <section>
    <h2>Resultado do Reajuste</h2>
    <p>O produto que custava <?=numfmt_format_currency($padrao,$price,"BRL")?>, com reajuste de <strong><?=$adjustment?>%</strong> vai passar a custar <strong><?=numfmt_format_currency($padrao,$newPrice,"BRL")?></strong> a partir de agora.</p>
    </section>
    <script>
        //Declarações automaticas
        mudaValor();

        function mudaValor() {
            p.innerText = adjustment.value;
        }
    </script>
</body>
</html>