<div class="titulo">Desafio PI</div>

<?php

echo pi();
$pi = 3.14;

echo "<br>";
var_dump(pi());
echo "<br>";
var_dump($pi);

if($pi == pi()) {
    echo "<br>Iguais";
} else {
    echo "<br>Diferentes";
}

// Operador Relacional

$piErrado = 2.8;

// Resposta
echo "<br>" . ($pi - pi());
echo "<br>" . ($pi - $piErrado);

if ($pi - $piErrado <= 0.01) {
    echo "<br> Praticamente iguais";
} else {
    echo "<br>Valor errado!!";
}

if ($pi - pi() <= 0.01) {
    echo "<br> Praticamente iguais";
} else {
    echo "<br>Valor errado!!";
}