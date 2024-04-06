<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Quarto de hora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <?php 
    $qtdsetor = $_GET ["qtdsetor"];
    $datahoraIn = $_GET ["datahoraIn"];
    $datahoraFn = $_GET ["datahoraFn"];
        
    ?>
    
    <main>
        <h1>Quartos de hora</h1>
        <form action="<?=$_SERVER ['PHP_SELF']?>" method="get">
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
        <pre>
            <?php
            $horaIn = strtotime ($datahoraIn); //converte a string de data em segundos
            $horaFn = strtotime ($datahoraFn);
            $intervaloMinutos = ($horaFn - $horaIn) / 60;
            $minutosCada = ($intervaloMinutos / $qtdsetor);
            
            ?>
        </pre>
    
    <h2>Resultado</h2>
    <p>O tempo total de serviço é de <strong><?=$intervaloMinutos?> minutos</strong>.</p>
    <p>Tempo de cada turno é de <strong><?=$minutosCada?> minutos</strong>.</p>
    
    <?php 
    
    //Função para demonstrar os turnos em hora:
    $horaInPHP = new DateTime($datahoraIn);
    date_format($horaInPHP, 'H:i');
    list ($hora, $minuto) = explode (':', $horaIn);
    $incrementoTurno = ($hora *3600 + $minuto * 60);

    
    echo "<p>Segue a divisão dos QUARTOS DE HORA: <br>";
    $counter = 1;
    while ($counter <= $qtdsetor) :
        echo "<strong>".$counter."º turno</strong> - ".($incrementoTurno).":".($incrementoTurno)."<br>";
        $counter++;
        
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