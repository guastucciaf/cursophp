<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Quarto de hora</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <?php 
    $total = $_GET ['second'] ?? 0;
    
    ?>
    
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER ['PHP_SELF']?>" method="get">
        <label for="second">Qual é o total de segundos?</label>
        <input type="time" name="second" id="second" min="0" step="1" required value="<?=$total?>">
        <input type="submit" value="Calcular">
        <label for=""></label>

    </form>
    </main>

    <section>
        <?php 
        /*
        
        PRINCÍPIO DA DIVISÃO DO TEMPO:
        1 min -> 60 seg
        1 hora -> 60 min * 60 seg -> 3.600 seg
        1 dia -> 24h * 60min -> 1.440 min * 60seg -> 86.400 seg
        1 semana -> 7 dias * 24h -> 168h * 60min -> 10.080min * 60seg -> 604.800 seg
        
        */
        
        $rest = $total;
        
        $week = (int) ($rest / 604800);
        $rest = $rest % 604800;

        $day = (int) ($rest / 86400);
        $rest = $rest % 86400;

        $hour = (int) ($rest / 3600);
        $rest = $rest % 3600;
        
        $minute = (int) ($rest / 60);
        $rest = $rest % 60;

        $second = $rest;

        ?>
        <h2>Totalizando tudo</h2>
        <p>Analizando o valor que você digitou, <strong><?=number_format($total, 0,',','.');?> segundos</strong> equivalem a um total de:
        <ul>
            <li><?=$week?> semanas</li>
            <li><?=$day?> dias</li>
            <li><?=$hour?> horas</li>
            <li><?=$minute?> minutos</li>
            <li><?=$second?> segundos</li>
        </ul>
        </p>
    </section>
</body>
</html>