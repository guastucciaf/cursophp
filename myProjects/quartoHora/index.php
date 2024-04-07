<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Quarto de hora</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
    <?php 
    $qtdsetor = $_REQUEST ["qtdsetor"] ?? 1;
    $datahoraIn = $_REQUEST ["datahoraIn"] ?? 0;
    $datahoraFn = $_REQUEST ["datahoraFn"] ?? 0;
        
    ?>
    
    <main>
        <h1>Quartos de hora</h1>
        <form action="<?=$_SERVER ['PHP_SELF']?>" method="request">
        <label for="qtdsetor">Quantos turnos no setor? (<span id="counter"> </span>)</label>
        <input type="range" name="qtdsetor" id="qtdsetor" min="1" max="10" step="1" oninput="mudaValor()" value="<?=$qtdsetor?>">
        <label for="horaIn">Horário Inicial</label>
        <input type="datetime-local" name="datahoraIn" id="horaIn" value="<?=$datahoraIn?>">
        <label for="horaFn">Horário Final</label>
        <input type="datetime-local" name="datahoraFn" id="horaFn" value="<?=$datahoraFn?>">
        <input type="submit" value="Calcular">
        

    </form>
    </main>

    <section>
    
    <?php
    $horaIn = strtotime ($datahoraIn); //converte a string de data em segundos
    $horaFn = strtotime ($datahoraFn);
    $totalCiclo = ($horaFn - $horaIn);
    $tempoTurno = ($totalCiclo / $qtdsetor);
    ?>
    
    <h2>Resultado</h2>
    <p>O tempo total de serviço é de <strong><?=($totalCiclo /60)?> minutos</strong>.</p>
    <p>Tempo de cada turno é de <strong><?=($tempoTurno / 60)?> minutos</strong>.</p>
    
    <?php 
        
    echo "<p>Estabelecidos os seguintes QUARTOS DE HORA: <br>";
    $counter = 1;
    
    while ($counter <= $qtdsetor) :
        $cadaQuarto = ($horaIn + $tempoTurno);
        $horaInFormatada = date('H:i', $horaIn);
        $cadaQuartoFormatada = date('H:i', $cadaQuarto);
        echo "<strong>".$counter."º turno</strong> - ".$horaInFormatada." até ".$cadaQuartoFormatada."<br>";
        $counter++;
        $horaIn = $cadaQuarto;
        
    endwhile;
    ?>
    
        
    </section>
    <script>
        //Declarações automaticas
        mudaValor();

        function mudaValor() {
            counter.innerText = qtdsetor.value;
        }
    </script>
</body>
</html>