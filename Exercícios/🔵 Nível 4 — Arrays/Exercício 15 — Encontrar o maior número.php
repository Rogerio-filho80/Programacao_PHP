<?php

$numeros = [10, 35, 22, 87, 45, 12];

$maior = $numeros[0];

foreach ($numeros as $numero) {

    if ($numero > $maior) {
        $maior = $numero;
    }

}

echo "Maior número: $maior";

?>