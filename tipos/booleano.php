<div class="titulo">Tipo Booleano</div>

<?php

echo TRUE;
echo '<br>';
echo FALSE;// não aparece no browser

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(false);
echo '<br>' . var_dump('false');
echo '<br>' . is_bool(false); // detectar se é booleano
echo '<br>' . is_bool('true'); // detectar se é booleano

// fazer as regras de conversões
echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0); // apenas zero é false
echo '<br>' . var_dump((bool) 0.0); // apenas zero é false
echo '<br>' . var_dump((bool) 20);
echo '<br>' . var_dump((bool) -1);
echo '<br>' . var_dump((bool) 0.00000001);
echo '<br>' . var_dump((bool) ""); // string vazia é false
echo '<br>' . var_dump((bool) " ");// espaço é true
echo '<br>' . var_dump((bool) "0");// string com um zero é false
echo '<br>' . var_dump((bool) "00");// string com mais de um zero é true
echo '<br>' . var_dump((bool) "false");// qualquer string com caracteres é true

echo '<br>' . var_dump(!!"false");// forma simplificada