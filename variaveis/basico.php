<div class="titulo">Variáveis</div>

<?php

$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$soma = $a + $b;
echo $soma, '<br>';
echo isset($numeroA);
echo '<br>';
unset($soma);
var_dump($soma);

$variavel = 10;
echo '<br>' . $variavel;

$variavel = "Agora sou uma string";
echo '<br>' . $variavel;

// Nomes de variável

$var = 'valida';
$var2 = 'valida';
$VAR2 = 'valida';
$_var_4 = 'valida';
$vâr5 = 'valida'; //Evitar
//$6var = 'invalida';
//$%var7 = 'invalida';
//$var8% = 'invalida';
echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);// variável pré definida