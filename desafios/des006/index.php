<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Desafio 6</title>
</head>
<body>
    <?php 
    $dividendo=$_GET['v1'] ?? 0;
    $divisor=$_GET['v2'] ?? 1;
    ?>
    <main>
        <h1>Analisador de uma divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="v1">Dividendo</label>
        <input type="number" name="v1" id="dividendo" min="0" value="<?=$dividendo?>">
        <label for="v2">Divisor</label>
        <input type="number" name="v2" id="divisor" min="1" value="<?=$divisor?>">
        <input type="submit" value="Analisar">
        </form>
    </main>

    <section id="divisao">
        <h2>Estrutura da divisão</h2>
        <?php 
            $quociente= (int) ($dividendo/$divisor);
            $resto = $dividendo%$divisor;
        ?>
        <table class="divisao">
            <tr>
                <td><abbr title="Dividendo"><?=$dividendo?></abbr></td>
                <td><abbr title="Divisor"><?=$divisor?></abbr></td>
            </tr>
            <tr>
                <td><abbr title="Resto"><?=$resto?></abbr></td>
                <td><abbr title="Quociente"><?=$quociente?></abbr></td>
            </tr>
        </table>

    </section>
</body>
</html>