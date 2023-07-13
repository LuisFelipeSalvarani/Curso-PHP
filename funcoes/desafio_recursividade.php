<div class="titulo">Desafio Recursividade</div>

<!-- 
    $array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];
    > 1
    > 2
    >> 3
    >> 4
    >> 5
    > 6
    >> 7
    >>> 8
    >>> 9
    > 10
 -->

<?php

$array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];

function recursividade ($numero) {
    foreach ($numero as $print1){
        if (!is_array($print1)) {
            echo "> $print1 <br>";
        } else {
            foreach ($print1 as $print2) {
                if (!is_array($print2)) {
                    echo ">> $print2 <br>";
                } else {
                    foreach ($print2 as $print3) {
                        echo ">>> $print3 <br>";
                    }
                }
            }
        }
    }
}

recursividade($array);

echo "<br>";
function imprimirArray ($array, $nivel = '>') {
    foreach($array as $elemento) {
        if (is_array($elemento)) {
            imprimirArray($elemento, $nivel . $nivel[0]);
        } else {
            echo "$nivel $elemento <br>";
        }
    }
}

imprimirArray($array);


