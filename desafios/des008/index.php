<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 8</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <?php 
        $valor = $_GET ["valor"];
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Número</label>
            <input type="number" name="valor" id="valor" step = "0.001" value = <?=$valor?>>
            <input type="submit" value="Calcular Raízes">

        </form>
        <section>
            <h2>Resultado Final</h2>
            <?php 
            echo  "<p>Analizando o <strong>número ".$valor.", temos:";
            echo "<lu><li>A sua raiz quadrada é ".sqrt($valor)."</lu>";
            ?>
            
        </section>
    </main>

</body>
</html>