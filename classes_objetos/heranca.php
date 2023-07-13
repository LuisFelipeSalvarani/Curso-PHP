<div class="titulo">Herança</div>

<?php

class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
        echo "Pessoa criada! <br>";
    }

    function __destruct() {
        echo "Pessoa diz: Tchau!!";
    }

    public function apresentar() {
        echo "{$this->nome} {$this->idade} anos<br>";
    }
}

class Usuario extends Pessoa {
    public $login;

    function __construct($nome, $idade, $login) {
        // $this->nome = $nome;
        // $this->idade = $idade;
        parent::__construct($nome, $idade);
        $this->login = $login;
        echo "Usuário criado! <br>";
    }

    function __destruct() {
        parent::__destruct();
        echo "<br>Usuário diz: Tchau!!";
    }

    public function apresentar() {
        echo "@{$this->login}: ";
        parent::apresentar();
    }
}

$usuario = new Usuario('Gustavo Mendonça', 21, 'gust_mend');
$usuario->apresentar();

unset($usuario);