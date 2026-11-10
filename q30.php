
<?php

$valor = readline("Digite o valor do saque: ");

$notas10 = 0;
$notas2 = 0;

for ($i = 0; $i < 1000 && $valor > 0; $i++) {

    if ($valor >= 10) {
        $valor = $valor - 10;
        $notas10++;
    } elseif ($valor >= 2) {
        $valor = $valor - 2;
        $notas2++;
    }
}

if ($valor == 0) {
    echo "Notas de 10: $notas10\n";
    echo "Notas de 2: $notas2\n";
} else {
    echo "Nao e possivel realizar o saque exato!";
}

?>
