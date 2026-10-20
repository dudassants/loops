<?php
$soma = 0;

for ($i = 1; $i <= 5; $i++) {
    $nota = readline("Digite a nota do aluno $i: ");
    $soma = $soma + $nota;
}

$media = $soma / 5;

echo "A média da turma é: $media";
?>