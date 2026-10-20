<?php
$acima = 0;

for ($i = 1; $i <= 12; $i++) {
    $faltas = readline("Digite as faltas do aluno: ");
    if ($faltas <= 15) {
        echo "Dentro do limite\n";
    } else {
        echo "Acima do limite\n";
        $acima++;
    }
}
echo "alunos acima do limite de faltas : " . $acima;
?>