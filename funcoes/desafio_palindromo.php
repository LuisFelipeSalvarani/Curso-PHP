<div class="titulo">Desafio Palindromo</div>

<?php

function palindromo ($palavra) {
    return (strtolower($palavra) === strrev(strtolower($palavra))) ? "Sim é um Palindromo" : "Não é um Palindromo";
}



echo palindromo("bola");
echo "<br>";
echo palindromo("ARAra");
echo "<br>";
echo palindromo("AbCcBa");
echo "<br>";
echo palindromo("ana");
echo "<br>";

function palindromoFor ($palavra) {
    $ultimoIndice = strlen($palavra) - 1;
    for ($i = 0; $i <= $ultimoIndice; $i++){
        if($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
            return 'Não é um Palindromo';
        }
    }
    return 'Sim é um Palindromo';
}

echo "<br>";
echo palindromo('arara');
echo "<br>";
echo palindromo('ana');
echo "<br>";
echo palindromo('abccba');
echo "<br>";
echo palindromo('bola');