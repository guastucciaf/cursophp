<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 13 - Caixa eletronico</title>
    <link rel="stylesheet" href="../style/style.css">
    <style>
        img.nota {
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
    $bucks = $_GET ['bucks'] ?? 0;
    ?>

  <main>
    <h1>Caixa Eletrônico</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="bucks">Qual valor você deseja sacar: (R$)</label>
        <input type="number" name="bucks" id="bucks" min="5" step="5" value="<?$bucks?>">
        <p style="font-size: 0.7em"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10 e R$5.</p>
        <input type="submit" value="Sacar">
    </form>
  </main>
  <section>
    <?php 
    $rest = $bucks;
    
    $hundred = ($rest / 100);
    $rest = ($rest % 100);
    
    $fifty = ($rest / 50);
    $rest = ($rest % 50);
    
    $ten = ($rest / 10);
    $rest = ($rest % 10);

    $five = ($rest / 5);
    $rest = ($rest % 5);
    ?>
    <h2>Saque de R$<?=number_format($bucks, 2, ",",".")?> realizado</h2>
    <p>O caixa eletronico vai te entregar as seguintes notas:</p>
    <ul>
        <li><img src="./img/hundred.jpg" alt="Nota de 100" class="nota"> x<?=(int) $hundred?></li> <!--Classe nota foi declarada em um style local, no head-->
        <li><img src="./img/fifty.jpg" alt="Nota de 50" class="nota"> x<?=(int) $fifty?></li>
        <li><img src="./img/ten.jpg" alt="Nota de 10" class="nota">x<?=(int) $ten?></li>
        <li><img src="./img/five.jpg" alt="Nota de 5" class="nota">x<?=(int) $five?></li>
    </ul>
  </section>  
</body>
</html>