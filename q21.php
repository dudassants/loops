<?php
$total = 0;

for ($dia = 1; $dia <= 7; $dia++) {
    $consumo = readline("Digite o consumo de água do dia $dia: ");
    $total += $consumo;
}
echo "o consumo total de água durante os 7 dias foi de $total litros.\n";
?>