<div class="titulo">Laço For</div>

<?php

for($cont = 1; $cont <= 5; $cont++) {
    echo "$cont <br>";
}

for(; $cont <= 10; $cont++){
    echo "$cont <br>";
}

for(; $cont <= 15; ) {
    echo "$cont <br>";
    $cont++;
}

$array =[1 => 'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];

print_r($array);
echo "<br>";
echo "<br>";
for($i = 1; $i <= count($array); $i++) {
    echo "{$array[$i]} <br>";
}

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

echo "<br>";

for($i = 0; $i < count($matrix); $i++) {
    for ($j = 0; $j < count($matrix[$i]); $j++){
        echo "{$matrix[$i][$j]} ";
    }
    echo "<br>";
}