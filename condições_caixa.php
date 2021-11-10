<?php
$saque = 50;
$nome = "João";

if ($saque >= 50){
    echo "Banco On $nome. Seja bem vindo(a)!";
}else if($saque >= 50 && $responsavel >= 1){
    echo "Banco On $nome.
    Você e seu responsavel podem sacar o dinheiro";
}else{
    echo "Banco On $nome.
    Só é permitada a retirada em saga por maiores de 18 anos.
}
?>