<div class="titulo">Desafio For</div>

<!-- 
    Usar o fo...
    #
    ##
    ###
    ####
    #####
    1) Pode usar incremento $i++
    2) Não pode usar incremneto $i++
 -->

<?php

$asteristico = '';

for ($i = 1; $i <= 5; $i++) { 
    $asteristico .= '#';
    echo "$asteristico <br>";
   
}

$asteristico = '';

for (; $asteristico !== '#####';) {
    $asteristico .= '#';
    echo "$asteristico <br>";
}

for($asteristico = '#'; $asteristico !== '######'; $asteristico .= '#') {
    echo "$asteristico<br>";
}