<?php

$valor = 380;

$notas100 = intdiv($valor, 100);
$valor %= 100;

$notas50 = intdiv($valor, 50);
$valor %= 50;

$notas20 = intdiv($valor, 20);
$valor %= 20;

$notas10 = intdiv($valor, 10);
$valor %= 10;

echo "Notas de R$100: $notas100<br>";
echo "Notas de R$50: $notas50<br>";
echo "Notas de R$20: $notas20<br>";
echo "Notas de R$10: $notas10<br>";

if ($valor > 0) {
    echo "Valor restante não pode ser sacado.";
}

?>