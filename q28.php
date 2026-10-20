<?php
$medios = 0;
$pequenos=0;
$grandes=0;


for ($i = 1; $i <= 10; $i++) {
    $lote = readline("digite o peso da fruta: ");

    if ($lote < 100) {
        echo "pequenos\n";
        $pequenos++;
    }  if ($lote >= 100 and $lote <=200) {
        echo "medios\n";
        $medios++;
    } else {
        echo "grandes\n";
        $grandes++;
    }
}

echo "lotes pequenos: " . $pequenos;
echo "lotes medios: " . $medios;
echo "lotes grandes: " . $grandes;
?>