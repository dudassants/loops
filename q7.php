<?php
$soma = 0;
$i = 1;

while ($i <= 5) {
    $nota = readline("digite a nota do aluno $i: ");
    $soma = $soma + $nota;
    $i++;
}

echo "a soma das notas é: " . $soma;
?>