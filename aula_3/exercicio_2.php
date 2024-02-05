<?php
function contarPalavras(string $frase):int
{
    $separador = ' ';
    $palavras = explode($separador, $frase);
    return count($palavras);
}

$entrada = readline('Digite um frase e descubra quantas palavras a compõem: ');
$numeroDePalavras = contarPalavras($entrada);
echo "A frase \"$entrada\" contêm $numeroDePalavras palavras";