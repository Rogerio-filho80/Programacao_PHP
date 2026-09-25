<?php

function maiorDeIdade($idade) {
    return $idade >= 18;
}

$idade = 20;

if (maiorDeIdade($idade)) {
    echo "Maior de idade.";
} else {
    echo "Menor de idade.";
}

?>