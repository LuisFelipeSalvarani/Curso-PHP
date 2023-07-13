<div class="titulo">Desafio Data</div>

<?php

class Data {
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar() {
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$aniversario = new Data();

$aniversario->dia = 13;
$aniversario->mes = 3;
$aniversario->ano = 2000;

echo $aniversario->apresentar() . '<br>';

$casamento = new Data();

$casamento->dia = 23;
$casamento->mes = 5;
$casamento->ano = 2035;

echo $casamento->apresentar();