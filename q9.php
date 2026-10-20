<?php
$soma = 0;

$numero = readline("Digite um número (digite 0 para sair): ");

while ($numero != 0) {
    $soma = $soma + $numero;
    $numero = readline("Digite um número (digite 0 para sair): ");
}

echo "A soma dos números é: " . $soma;
?>