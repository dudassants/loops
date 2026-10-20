<?php
$n = readline("Digite um número inteiro positivo: ");
if ($n <= 0) {
    echo "Digite um número inteiro positivo.\n";
} else {
    for ($i = 0; $i <= $n; $i += 2) {
        echo $i . "\n";
    }
}
?>