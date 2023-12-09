<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">

</head>
<body> 
    <header>
        <h1>Resultado Final</h1>
    </header>
    <main>
        <?php 
            // var_dump($_REQUEST); // _GET, _POST, _COOKIE
            $numero = $_GET["numero"] ?? 0;
            $ant = $numero - 1;
            $suc = $numero + 1;
            echo "<p>O numero escolhido foi <strong>$numero</strong>!";
            echo "<p>O seu antecessor é <strong>$ant</strong>";
            echo "<p>O seu sucessor é <strong>$suc</strong>";

        ?> 
        <p><a href="index.html"> <- Voltar</a></p>
    </main>
</body>
</html> 