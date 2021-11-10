<?php
$contador = 0;
$numero = 1;
//$contador = $contador + 1;
//$contador++;
//$contador += 1;

while($contador <= 12){
    echo "$numero * $contador = ".($numero * $contador)." <br>";
    $contador++;
}
 
echo "Fim do while";
echo "Imprima os  numeros entre 1 e 12<br>";
$final = 12;
for ($i = 1; $i <= $final; $i++ );
echo "Fim do FOR";
if ($numero <= 12){
    echo "Algoritmo $numero. Seja bem vindo(a)!";
}else if($numero <= 12 && $responsavel >= 1){
    echo "Algoritmo $numero.
    O mes é existente!";
}else{
    echo "Algoritmo $contador.
    Só é existente quando o contador contar um numero entre 1 e 12.
}
?>