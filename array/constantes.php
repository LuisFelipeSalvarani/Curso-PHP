<div class="titulo">Arrays Constantes</div>

<?php

const FRUTAS = array('Laranja', 'Abacaxi');
//FRUTAS[0] = 'banana';
//FRUTAS[] = 'banana';
echo FRUTAS[0];

const CARROS = ["fiat" => "Uno", "ford" => "Fiesta"];
echo '<br>' . CARROS["fiat"];

define('CIDADES', array('Belo Horizonte', 'Recife'));
//CIDADES[] = 'Rio de Janeiro';
echo '<br>' . CIDADES[1];