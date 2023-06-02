<div class="titulo">Operadores Lógicos</div>

<?php

echo "<p>V ou F</p>";

var_dump(true);
var_dump(!true); // not
var_dump(!!true);

echo "<p>Tabela Verdade 'AND' (E)</p>";

var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);
var_dump(true && 3 > 2 && 7 <= 7);
var_dump(true && 3 > 2 && 7 <= 7 && 3 === '3');
echo "<br>";
var_dump(true AND true);
var_dump(true AND false);
var_dump(false AND true);
var_dump(false AND false);
var_dump(true AND 3 > 2 AND 7 <= 7);
var_dump(true AND 3 > 2 AND 7 <= 7 AND 3 === '3');

echo "<p>Tabela Verdade 'OR' (OU)</p>";

var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);
echo "<br>";
var_dump(true OR true);
var_dump(true OR false);
var_dump(false OR true);
var_dump(false OR false);

echo "<p>Tabela Verdade 'XOR' (OU Exclusivo)</p>";

var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor true);
var_dump(false xor false);
echo "<br>";
var_dump(true != true);
var_dump(true != false);
var_dump(false != true);
var_dump(false != false);

echo "<p>Exemplo</p>";

$idade = 65;
$sexo = 'M';

$pagouPrevidencia = true;
$criterioHomem = ($idade >= 65 && $sexo === 'M');
$criterioMulher = ($idade >= 60 && $sexo === 'F');
$atingiuCriterio = $criterioHomem || $criterioMulher;
$podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;
echo "Pode se aposentar -> $podeSeAposentar.<br>";

if($idade >= 60 && $sexo === 'F') {
    echo "Pode se aposentar -> $sexo";
} elseif ($idade >= 65 && $sexo === 'M') {
    echo "Pode se aposentar -> $sexo";
} else {
    echo "Vai ter que trabalhar mais um pouco..";
}