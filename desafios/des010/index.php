<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 10</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <?php 
    $anoatual = date("Y");
    $anonasc = $_GET ['anonasc'] ?? $anoatual;
    $anovait = $_GET ['anovait'] ?? $anoatual;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        
        <form action="<?=$_SERVER ['PHP_SELF']?>" method="get">
        <label for="anonasc">Em que ano você nasceu?</label>
        <input type="number" name="anonasc" id="anonasc" value="<?=$anonasc?>" max="<?=$anoatual?>">
        <label for="anovait">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=$anoatual?></strong>)</label>
        <input type="number" name="anovait" id="anovait" value="<?=$anovait?>" min="<?=$anoatual?>">
        <input type="submit" value="Qual será minha idade?">
        </form>

        <section>
            <h2>Resultado</h2>
            <?php
            $idade = $anovait - $anonasc; 
            print "Quem nasceu em ".$anonasc." vai ter <strong>".$idade." anos</strong> em ".$anovait."!"
            ?>
        </section>

    </main>
</body>
</html>