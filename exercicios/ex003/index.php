<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
    /*
    tipos primitivos - Escalares:
    $nome = "Afonso"; //tipo primitivo: string (cadeia de caracteres)
    $idade = 34; // int ou integer (valor numerico inteiro sem decimais)
    $peso = 87.1; // float ou double (valores numericos reais, com parte decimal)
    $casado = true; // bool ou boolean (valores logicos true ou false)
    const PAIS = "Brasil"; // constante
    */

        /* 0x = hexadecimal  0b = binario  0 = octal
        $num = 010;
        echo "O valor da variavel é $num"; */

        /* $v = "Afonso";
        var_dump($v); */

        /* $num = (integer) 3e2; // 3 x 10(2) Coerção (por padrão valores numericos elevados a potencias são do tipo float, desta forma forçamos a ser inteiro)
        echo "O valor da variavel é $num";
        var_dump($num); */

    
    //Tipos primitivos - Compostos:
    /*
    $vet = [6, 2.5, "Maria", 3, false];
    var_dump($vet); // array
    */

    /*
    class Pessoa {
        private string $nome;
    }

    $p = new Pessoa;
    var_dump($p); // object
    */

    /*
    Tipos primitivos - Especiais:
    null
    resource
    callabe
    mixed
    */

    ?>
    
    </body>
</html>