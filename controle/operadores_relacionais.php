<div class="titulo">Operadores Relacionais</div>

<?php

// Comparação
var_dump(1 == 1); //true
var_dump(1 > 0); //true
var_dump(1 < 0); //false
var_dump(1 >= 1); //true
var_dump(1 != 1); //false
echo "<br>";
var_dump(1 <> 1); //false
var_dump(1 == '1'); //true
var_dump(1 === '1');//false  compara o valor e o tipo 
var_dump(1 !== '1');//true  compara o valor e o tipo
var_dump(1 !='1');//false

echo "<p>Relacionais no If/Else</p>";

$idade = 45;

if ($idade < 18) {
    echo "Menor de idade = $idade anos<br>";
}elseif ($idade <= 65){
    echo "Adulto = $idade anos<br>";
}else{
    echo "Terceira idade = $idade anos!<br>";
}

echo "<p>Spaceship</p>";

var_dump(5 <=> 3);
var_dump(5 <=> 5);
var_dump(3 <=> 5);

echo "<p>Valores podem ser V ou F</p>";

var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");