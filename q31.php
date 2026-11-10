<?php

$m = readline("Quantidade de modelos: ");
$t = readline("Quantidade de testes: ");

$maior = 0;

for ($i = 1; $i <= $m; $i++) {
    $soma = 0;
    for ($j = 1; $j <= $t; $j++) {

        $nota = readline("Digite a nota: ");

        $soma = $soma + $nota;

        if ($nota < 50) {
            echo "Baixo\n";
        } elseif ($nota < 80) {
            echo "Moderado\n";
        } else {
            echo "Alto\n";
        }
    }

    $media = $soma / $t;

    echo "Media do modelo $i: $media\n";

    if ($media > $maior) {
        $maior = $media;
        $melhor = $i;
    }
}

echo "Melhor modelo: $melhor\n";
echo "Maior media: $maior\n";

?>
