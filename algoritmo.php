<?php
//uma variavel que simule um número inteiro
//entre 1 e 12
//com descrição de mes correspondente
//caso o número for diferente dos numeros entre 1 e 12, mes não existente
//exemplo: numero = 14
//saída: mes não existente
//exemplo2: numero = 7
//saída: mes 7 - julho

$valormes = 12;
$n1 = 1;
$n2 = 2;
$n3 = 3;
$n4 = 4;
$n5 = 5;
$n6 = 6;
$n7 = 7;
$n8 = 8;
$n9 = 9;
$n10 = 10;
$n11 = 11;
$n12 = 12;
$soma = 0;

echo "O valor do numero solicitado é: $valormes<br>";
if ($valormes >= 1){
    $result = $valormes/1;
    $n100 = intval($result); // extrai o valor inteiro 
    echo "$n1 <br>";
    $soma = $n1 * 1;
    $valormes -= $soma;
    echo "Soma: $soma - Valor do mes restante: $valormes <br>";
}
if ($valormes <+12){
    $result = $valormes/12;
    $n100 = intval($result); // extrai o valor inteiro 
    echo "$n12 <br>";
    $soma = $n12 * 1;
    $valormes -= $soma;
    echo "Soma: $soma - Valor do mes restante: $valormes <br>";
}
?>    
