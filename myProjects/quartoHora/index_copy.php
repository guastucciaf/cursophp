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
    $horaIn = $_GET ["horaIn"];
    $horaFn = $_GET ["horaFn"];
        
    ?>
    
    <main>
        <h1>Quartos de hora</h1>
        <form action="<?=$_SERVER ['PHP_SELF']?>" method="get">
        <label for="qtdsetor">Quantos turnos no setor? (<span id="counter"> </span>)</label>
        <input type="range" name="qtdsetor" id="qtdsetor" min="1" max="10" step="1" oninput="mudaValor()" value="<?=$qtdsetor?>">
        <label for="horaIn">Horário Inicial</label>
        <input type="datetime-local" name="horaIn" id="horaIn" value="<?=$horaIn?>">
        <label for="horaFn">Horário Final</label>
        <input type="datetime-local" name="horaFn" id="horaFn" value="<?=$horaFn?>">
        <input type="submit" value="Calcular">
        

    </form>
    </main>

    <section>
        <?php 
        var_dump($horaIn);
        ?>
    <h2>Resultado</h2>
    <p>Tempo de cada turno é <?=$horaTotal?></p>
        
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