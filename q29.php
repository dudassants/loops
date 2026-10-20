<?php
for ($i = 1; $i <= 8; $i++) {
    $valor = readline("Digite o valor da compra: ");
    if ($valor >= 300) {
        echo "frete gratis\n";
    } elseif ($valor >= 150) {
        echo "frete: R$ 15,00\n";
    } else {
        echo "frete: R$ 25,00\n";
    }
}
?>