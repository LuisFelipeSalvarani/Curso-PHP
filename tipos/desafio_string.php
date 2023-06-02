<div class="titulo">Desafio string</div>

<?php

//Enunciado:
//Avaliando os metódos da documentação da string,
//qual método
//que a posição do tsto 'abc' 
//na string '!AbcBcaabc' retorne 1?

echo strpos('!AbcBcaabc', 'abc'); // difere maiúscula de minúscula
echo '<br>';
echo stripos('!AbcBcaabc', 'abc'), ' Resposta certa'; // indifere maiúscula de minúscula
echo '<br>';
echo strpos(strtolower('!AbcBcaabc'), strtolower('ABC'));// transformou tudo em minúscula e acho a posição