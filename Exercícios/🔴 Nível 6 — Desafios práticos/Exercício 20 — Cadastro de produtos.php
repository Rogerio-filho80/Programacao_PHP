<?php

$produtos = [
    [
        "nome" => "Teclado",
        "preco" => 120,
        "quantidade" => 5
    ],
    [
        "nome" => "Mouse",
        "preco" => 80,
        "quantidade" => 10
    ],
    [
        "nome" => "Monitor",
        "preco" => 900,
        "quantidade" => 3
    ]
];

$totalEstoque = 0;

foreach ($produtos as $produto) {

    $totalProduto =
        $produto["preco"] * $produto["quantidade"];

    echo $produto["nome"] .
         " - R$ " .
         $totalProduto .
         "<br>";

    $totalEstoque += $totalProduto;
}

echo "<br>";
echo "Valor total do estoque: R$ $totalEstoque";

?>