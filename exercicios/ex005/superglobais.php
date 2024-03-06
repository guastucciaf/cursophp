<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio PHP</title>
</head>
<body>
    <main>
        <pre>
            <?php
            setcookie("dia-da-semana", "SEGUNDA", time() + 3600);
            
            session_start();
            $_SESSION["teste"] = "FUNCIONOU!";
            
            
            echo "<h1>Superglobal GET</h1>";
            var_dump($_GET); // Puxa os dados pela URL
            
            echo "<h1>Superglobal POST</h1>";
            var_dump($_POST); // Puxa os dados pelos pacotes/cabeçalhos
            
            echo "<H1>Superglobal REQUEST</H1>";
            var_dump($_REQUEST); // Puxa por ambos acime, gerando em apenas umas Array
            
            echo "<H1>Superglobal COOKIE</H1>";
            var_dump($_COOKIE); //Pequenas variaveis salvas no navegador
            
            echo "<h1>Superglobal SESSION</h1>";
            var_dump($_SESSION); //Variaveis que não são perdidas entre navegação de páginas
            
            echo "<h1>Superglobal ENV</h1>";
            var_dump($_ENV); // ENV -> Environment (Superglogal de ambiente)
            /* NÃO FUNCIONA DE FORMA APROPRIADA EM SERVIDOR LOCAL. O código é apenas uma amostra, para funcionar no LOCALHOST
            
            foreach (getenv() as $c => $v) {
                echo "<br> $c -> $v";
            } 
            */
            
            echo "<h1>Superglobal SERVER</h1>";
            var_dump($_SERVER);

            echo "<h1>Superglobal GLOBALS</h1>";
            var_dump($GLOBALS)
            ?>
        </pre>
    </main>
</body>
</html>