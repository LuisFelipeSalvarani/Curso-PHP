<div class="titulo">Desafio Sorteio</div>

<?php

$nomes = ["Elza", "Rapunzel", "Branca de neve", "Cinderela"];

$index = array_rand($nomes);

echo "<h1>$nomes[$index]</h1>";