<?php
$n = readline("Digite um número inteiro não negativo: ");

if ($n < 0) {
    echo "Erro: digite um número não negativo.\n";
} else {
    $fatorial = 1;

    for ($i = 1; $i <= $n; $i++) {
        $fatorial *= $i;
    }

    echo "O fatorial de $n é $fatorial.\n";
}
?>