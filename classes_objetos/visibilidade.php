<div class="titulo">Visibilidade</div>

<?php

class A {
    public $publico = 'Público';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA() {
        echo "Class A) Publico = {$this->publico}<br>";
        echo "Class A) Protegido = {$this->protegido}<br>";
        echo "Class A) Privado = {$this->privado}<br>";
    }

    protected function vaiPorHeranca() {
        echo "Serei transmitido por herança!";
    }

    private function naoMostrar() {
        echo "Não vou imprimir!";
    }
}

$a = new A();
$a->mostrarA();
// $a->naoMostar(); // não consegue acessar

class B extends A {
    public function mostrarB() {
        echo "Class B) Publico = {$this->publico}<br>";
        echo "Class B) Protegido = {$this->protegido}<br>";
        echo "Class B) Privado = {$this->privado}<br>";

        parent::vaiPorHeranca();
    }
}

echo "<br>";
$b = new B();
$b->mostrarB();
echo "<br>";
$b->mostrarA();
// $b->vaiPorHeranca(); // não consegue acessar
// $b->naoMostrar(); // não consegue acessar