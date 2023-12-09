<!-- Funções aritmeticas: https://youtu.be/wwwDeZwEIr0?si=czZkJEBgau2610lQ 
-->

<!-- Conversão de Base numérica -->
<?php 
echo "Convertendo o numero 254 da base decimal para: Binário, Octal e Hexadecimal <br>";
$r = base_convert(254, 10, 2); // base_convert(numero, de, para)
print("Em Binário a resposta é $r <br>");
$r = base_convert(254, 10, 8); // base_convert(numero, de, para)
print("Em Octal a resposta é $r <br>");
$r = base_convert(254, 10, 16); // base_convert(numero, de, para)
print("Em Hexadecimal a resposta é $r <br><br>");
?>

<!-- Arredondamento de valor
ceil() -> pra baixo, floor() -> pra cima, round() -> aritmetico  -->


<?php 
print("Indicar valor minimo ou maximo dentro de uma sequencia<br><br>");
$seqMin = min(6, 8, 200, 1024558);
print("O menor valor da sequencia: <strong>6, 8, 200, 1024558</strong> é $seqMin <br>");
$seqMax =  max(99999,-99999, 0, 5, 34);
print("A maior valor da sequencia: <strong>99999,-99999, 0, 5, 34</strong> é $seqMax <br><br>");
?>



<?php 
print("Calcular raiz quadrada<br><br>");
$rquad = sqrt (81); // sqrt função para calculo de raiz quadrada
print("A raiz quadrada de 81 é $rquad <br>");
$rcub = 27 ** (1/3);
print("A raiz cubica de 27 é $rcub <br>");
?>