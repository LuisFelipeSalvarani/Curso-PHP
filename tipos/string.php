<div class="titulo">Tipo String</div>

<?php

echo 'Eu sou uma string';
echo '<br>';
var_dump('Eu também');// não se da bem com acentos
echo '<br>';

// concatenação

echo "Nós também" . ' somos';// ponto concatena strings
echo '<br>', "Também aceito", " virgulas";
echo '<br>';
echo "Número é " . 123;
echo '<br>';
echo "'Teste'" . ' "Teste"';

print("<br>Também existe o função print");
print "<br>Também existe o função print";

// Algumas funções

echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . strlen('Quantas letras?');
echo '<br>' . strlen('Eu também');// não se da bem com acentos
echo '<br>' . mb_strlen('Eu também');// funciona com acentos
echo '<br>' . mb_strlen("Eu também", "utf-8");// com encode
echo '<br>' . substr('Só uma parte mesmo', 7, 6);// parte
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso');// trocar strings