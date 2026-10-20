<?php
$num = 7;

$tentativa = readline("Tente adivinhar o número: ");

while ($tentativa != $num) {
    if ($tentativa > $num) {
        echo "o número digitado é maior.\n";
    } else {
        echo "o número digitado é menor.\n";
    }
    $tentativa = readline("Tente novamente: ");
}
echo "parabéns! você acertou!";
?>