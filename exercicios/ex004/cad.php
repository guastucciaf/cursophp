<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">

</head>
<body> 
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            // var_dump($_REQUEST); // _GET, _POST, _COOKIE
            $nome = $_GET["nome"] ?? "sem nome"; // ?? - operador de coalescência nula, funciona a partir do PHP 7
            $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
            echo "<p>É um prazer te conhecer, <strong>$nome $sobrenome</strong>! Este é o meu site!";

        ?> 
        <p><a href=javascript:history.go(-1)>Voltar para a página anterior</a></p>
    </main>
</body>
</html> 