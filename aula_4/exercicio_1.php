<?php
$numeros = [];

for ($i = 1; $i < 11; $i++) {
    $numero = readline("Digite o $i ° número: ");
    array_push($numeros, $numero);
}

// TODO Chamar as funções de contagem
echo "A lista contém " . contagemDePositivos($numeros) . " números positivos\n";
echo "A lista contém " . contagemDeNegativos($numeros) . " números negativos\n";
echo "A lista contém " . contagemDePares($numeros) . " numeros pares\n";
echo "A lista contém " . contagemDeImpares($numeros) . " numeros ímpares\n";

function contagemDePositivos(array $numeros): int
{
    $lista = array_filter($numeros, fn ($numero) => $numero > 0);
    return count($lista);
}

function contagemDeNegativos(array $numeros): int
{
    $lista = array_filter($numeros, fn ($numero) => $numero < 0);
    return count($lista);
}

function contagemDePares(array $numeros): int
{
    $lista = array_filter($numeros, fn ($numero) => $numero % 2 == 0);
    return count($lista);
}

function contagemDeImpares(array $numeros):int
{
    $lista = array_filter($numeros, fn($numero) => $numero % 2 !=0);
    return count($lista);
}