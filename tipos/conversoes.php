<div class="titulo">Conversões</div>

<?php

echo is_int(PHP_INT_MAX);

// int para float

echo '<br>';
var_dump(PHP_INT_MAX + 1);// ultrapassa o limite do inteiro virando float
echo '<br>';
var_dump(1 + 1.0);
echo '<br>';
var_dump((float) 3);
echo '<br>';
echo '<br>';

// float para int

echo '<p>Float para int</p>';
var_dump((int) 2.8);
echo '<br>';
var_dump(intval(2.8, 10));
echo '<br>';
var_dump((int) round(2.8));
echo '<br>';
var_dump(round(2.8));
echo '<br>';
echo '<br>';

// operações com string

echo '<p>Strings</p>';
var_dump(3 + "2");
echo '<br>';
var_dump("3" + 2);
echo '<br>';
var_dump("3" . 2);
echo '<br>', is_string("3" . 2);
//echo '<br>', is_string("3" + 2);// não é uma string
//var_dump(1 + 'cinco'); //erro
echo '<br>';
var_dump(1 + '5 cinco'); //erro
echo '<br>';
var_dump(1 + '2+5');
echo '<br>';
var_dump(1 + '3.2');
echo '<br>';
var_dump(1 + "-3.2e2");
echo '<br>';
var_dump((int) "10.5");
echo '<br>';
var_dump((float) "10.5");