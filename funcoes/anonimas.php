<div class="titulo">Funções Anônimas</div>

<?php

$soma = function ($a, $b) {
    return $a + $b;
};

echo $soma(1, 2) . '<br>';

function executar($a, $b, $op, callable $funcao) {
    $resultado = $funcao($a, $b); //chama uma função
    echo "$a $op $b = $resultado<br>";
}

executar(2, 3, '+', $soma); //chama a função soma com esses valores

$multiplicacao = function ($a, $b) {
    return $a * $b;
};

executar(2, 3, '*', $multiplicacao);

function divisao ($a, $b) {
    return $a / $b;
};

executar(2, 4, '/', 'divisao'); // não consegue puxar