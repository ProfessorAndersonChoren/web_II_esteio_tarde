<?php
function realizarOperacao(float $primeiroNumero, float $segundoNumero, int $operacao):float
{
    switch($operacao){
        case 1:
            return $primeiroNumero + $segundoNumero;
        case 2:
            return $primeiroNumero - $segundoNumero;
        case 3:
            return $primeiroNumero * $segundoNumero;
        case 4:
            return $primeiroNumero / $segundoNumero;
        default:
            return 0;
    }
}

$primeiroNumero = readline('Digite o primeiro número: ');
$segundoNumero = readline('Digite o segundo número: ');
echo "\nEscolha uma das opções abaixo:\n";
echo "1 - Somar\n";
echo "2 - Subtrair\n";
echo "3 - Multiplicar\n";
echo "4 - Dividir\n";
$operacao = readline();

if($operacao < 1 || $operacao > 4){
    echo 'Operação inválida!!!';
}else{
    echo realizarOperacao($primeiroNumero, $segundoNumero, $operacao);
}