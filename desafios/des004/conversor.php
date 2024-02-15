<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de moeda v2.0</title>
</head>
<body>
    
    <main>
    <h1>Conversor de moeda v2.0</h1>
        <?php
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
        
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        
            $dados = json_decode(file_get_contents($url), true);
            $cotação = $dados["value"][0]["cotacaoCompra"];
            $reais = $_GET["valor"] ?? 0;
            $dolar = $reais/$cotação;

            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
            
            echo "<p><strong>".numfmt_format_currency($padrao, $reais, "BRL")."</strong> equivalem a <strong>".numfmt_format_currency($padrao, $dolar, "USD")."</strong>."; 
            echo "<p>Cotação de <strong>".numfmt_format_currency($padrao, $cotação, "BRL") ."</strong> em ".date("d-m-Y");
        
        ?>
        <p>Fonte: <strong>Banco Central do Brasil.</strong></p>
        <a href="./index.html">Nova conversão</a>
        
        
    </main>
</body>
</html>