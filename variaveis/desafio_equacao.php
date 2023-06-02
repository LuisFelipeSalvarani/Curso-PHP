<div class="titulo">Desafio Equação</div>

<?php

$a = 1;
$b = 2;
$c = 3;
$d = 5;
$e = 6;
$f = 7;
$g = 10;

$soma = $c + $b;

$multi1 = $e * $soma;
$multi2 = $c * $b;

$pot1 = $multi1 ** $b;

$div1 = $pot1 / $multi2;

$sub1 = $a - $d;
$sub2 = $b - $f;

$multi3 = $sub1 * $sub2;

$div2 = $multi3 / $b;

$pot2 = $div2 ** $b;

$sub3 = $div1 - $pot2;

$pot3 = $sub3 ** $c;
$pot4 = $g ** $c;

$reslutado = $pot3 / $pot4;

echo "O resultado finel é " . $reslutado . ".";
echo '<br>';
echo '<br>';

echo '<h3>Outra resolução</h3>';

$numA = (6 * (3 + 2)) ** 2;
$denA = 3 * 2;

$numB = (1 - 5) * (2 - 7);
$denB = 2;

$superiorA = $numA / $denA;
$superiorB = ($numB / $denB) ** 2;

$superior = ($superiorA - $superiorB) ** 3;
$inferior = 10 ** 3;

$final = $superior / $inferior;

echo "O resultado finel é " . $final . ".";