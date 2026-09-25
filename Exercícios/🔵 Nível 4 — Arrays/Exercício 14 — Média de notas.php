<?php

$notas = [8, 7, 9, 6, 10];

$soma = 0;

foreach ($notas as $nota) {
    $soma += $nota;
}

$media = $soma / count($notas);

echo "Média: $media";

?>