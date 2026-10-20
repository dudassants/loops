<?php
$total = 0;

for ($produto = 1; $produto <= 5; $produto++) {
    $consumo = readline("Digite a quantidade de produto vendida $produto: ");
    $total += $consumo;
}
echo "a quantidade de produtos vendidos foi de $total unidades.\n";
?>