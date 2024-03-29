<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <?php 
    $sal_min=1_412.00;
    $moeda_corrente= numfmt_create("pt-BR", NUMBERFORMATTER::CURRENCY);
    $seu_sal = $_POST ["seu_sal"];

    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER ['PHP_SELF']?>" method="post">
            <label for="seu_sal">Salário (R$)</label>
            <input type="number" name="seu_sal" id="seu_sal" step="0.01" value=<?=$seu_sal?>>
            <p>Considerando o salário mínimo de <strong><?=numfmt_format_currency ($moeda_corrente,$sal_min,"BRL")?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    <section>
        <h2>Resultado Final</h2>
        <?php 
        $qtd_sal= (int) ($seu_sal / $sal_min);
        $rest_sal= $seu_sal - ($sal_min*$qtd_sal);
        echo "<p>Quem recebe um salário de <strong>".numfmt_format_currency ($moeda_corrente,$seu_sal,"BRL")."</strong> ganha <strong>".$qtd_sal." salários mínimos + ".numfmt_format_currency ($moeda_corrente,$rest_sal,"BRL")."</strong>.";
        ?>
        
    </section>

    </main>
</body>
</html>