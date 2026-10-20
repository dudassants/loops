<?php
$pares = 0;
$impares = 0;

for ($i = 1; $i <= 50; $i++) {
    if ($i % 2 == 0) {
        $pares = $pares + $i;
    } else {
        $impares = $impares + $i;
    }
}

echo "soma dos pares: " . $pares . "\n";
echo "soma dos ímpares: " . $impares;
?>