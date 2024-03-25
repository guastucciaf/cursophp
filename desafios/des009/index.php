<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 9</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
<?php 
    $vlr1 = $_GET ['vlr1'] ?? 0;
    $vlr2 = $_GET ['vlr2'] ?? 0;
    $peso1 = $_GET ['peso1'] ?? 1;
    $peso2 = $_GET ['peso2'] ?? 1;
?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER ['PHP_SELF']?>" method="get">
            <label for="vlr1">1º Valor</label>
            <input type="number" name="vlr1" id="vlr1" value="<?=$vlr1?>">
            <label for="peso1">1º Peso</label>
            <input type="number" name="peso1" id="peso1" min = "1" value="<?=$peso1?>">
            <label for="vlr2">2º Valor</label>
            <input type="number" name="vlr2" id="vlr2" value="<?=$vlr2?>">
            <label for="peso2">2º Peso</label>
            <input type="number" name="peso2" id="peso2" min = "1" value="<?=$peso2?>">
            <input type="submit" value="Calcular Médias">
        </form>
        <section>
            <?php 
            //Fórmulas Médias aritmeticas
            $arit_simp = ($vlr1 + $vlr2) / 2;
            $arit_pond = (($vlr1 * $peso1) + ($vlr2 * $peso2)) / ($peso1 + $peso2);
            ?>
            <h2>Cálculo das médias</h2>
            <?php 
            echo "<p>Analisando os valores ".$vlr1." e ".$vlr2.":";
            echo "<ul>
                    <li>A <strong>Média Aritmetica Simples</strong> entre os valores é igual a<strong> ".number_format($arit_simp, 2, ',','.')."</strong>.
                    <li>A <strong>Média Aritmetica Ponderada</strong> com pesos ".$peso1." e ".$peso2." entre os valores é igual a <strong>".number_format($arit_pond, 2, ',','.')."</strong>.</ul>"
                    
            ?>
        </section>
    </main>
</body>
</html>