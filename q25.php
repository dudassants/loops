<?php
$soma = 0;

for ($i = 1; $i <= 7; $i++) {
    $temp = readline("Digite a temperatura: ");
    $soma = $soma + $temp;
    if ($i == 1 || $temp > $maior) {
        $maior = $temp;
    }
}
echo "média: " . $soma / 7 . "\n";
echo "maior temperatura: " . $maior;
?>

