<div class="titulo">Mapa</div>

<?php

$dados = array(
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.8
);

print_r($dados);
echo "<br>";
var_dump($dados[0]);
echo "<br>" . $dados["idade"];
echo "<br>" . $dados["cor"];
echo "<br>" . $dados["peso"];
echo "<br>";
var_dump($dados["outra_informacao"]);

$lista = array(
    "a",
    "cinco" => "b",
    "c",
    8 => "d",
    "e",
    6 => "f",
    "g",
    8 => "h"
);

echo "<br>";
print_r($lista);

$lista[] = "i";

echo "<br>";
print_r($lista);

$lista[20] = "j";

echo "<br>";
print_r($lista);

$lista[false] = "tentei indexar com false!"; // false é igual a 0

echo "<br>";
print_r($lista);

$lista[true] = "tentei indexar com true!"; // true é igual a 1

echo "<br>";
print_r($lista);