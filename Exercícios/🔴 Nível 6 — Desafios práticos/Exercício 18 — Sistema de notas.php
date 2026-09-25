<?php

$aluno = "Carlos";

$notas = [8, 7, 9];

$soma = 0;

foreach ($notas as $nota) {
    $soma += $nota;
}

$media = $soma / count($notas);

echo "Aluno: $aluno<br>";
echo "Média: $media<br>";

if ($media >= 7) {
    echo "Situação: Aprovado";
} else {
    echo "Situação: Reprovado";
}

?>