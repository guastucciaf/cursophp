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
    $numero = $_GET['num'];
    number_format($numero, 3, ',','.');
?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" step = "0.001" value = <?=$numero?>>
            <input type="submit" value="Calcular Raízes">

        </form>
        <section>
            <h2>Resultado Final</h2>
            <?php 
            $rquadrada=sqrt($numero);
            $rcubica=$numero**(1/3);
            echo  "<p>Analizando o <strong>número ".$numero.",</strong> temos:";
            echo "<ul>
                    <li>A sua raiz quadrada é <strong>".number_format($rquadrada, 3, ',','.')."</strong>.
                    <li>A sua raiz cúbica é <strong>".number_format($rcubica, 3, ',','.')."</strong>.</ul>";
            ?>
            
        </section>
    </main>

</body>
</html>