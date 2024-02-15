<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de moeda</title>
</head>
<body>
    <main>
        
        <h1>Conversor de moeda v1.0</h1>
        <?php 
        /* CÓDIGO DESENVOLVIDO DE FORMA RUDIMENTAR POR MIM
 
        $reais = $_GET["valor"];
        $cota = 4.97;
        $dolar = $reais/$cota;
        $dolar = number_format($dolar, 2, '.', '');
        $cota = number_format($cota, 2, ',', '.');
        $reais = number_format($reais, 2, ',', '.');
        echo "Seus R$$reais equivalem a $$dolar \n";
        echo "<p><strong>Cotação fixa de R$$cota</strong> inserida diretamente no código.</p>";
        */
        // FORMATAÇÃO DE MOEDAS COM BIBLIOTECA DE INTERNACIONALIZAÇÃO
        
        //Cotação copiada do Google
        $cotação = 4.97;

        //Quantos reais você tem?
        $reais = $_GET["valor"] ?? 0;

        //Equivalencia em dolar
        $dolar = $reais/$cotação;


        //Formatação de moedas com internacionalização
        //Biblioteca intl (Internalization PHP)

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "Seus " . numfmt_format_currency($padrao, $reais, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");


        ?>
        <!-- Sugerido pelo Guanabara, mas retorna com o formulario preenchido com o valor anterior
        <button onclick="javascript:history.go(-1)">Voltar</button>
        -->
        <p>
            <a href="./index.html">Clique aqui para nova conversão</a>
        </p>

    </main>
</body>
</html>