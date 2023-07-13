<div class="titulo">Membros Estáticos</div>

<?php

class A {
    public $naoStatic = 'Variável de instância';
    public static $static = 'Variável de classe (estática)';

    public function mostrarA() {
        echo "Não estático = {$this->naoStatic}<br>";
        // Tentativa 1
        // echo "Estática = {$this->static}<br>";
        // Tentativa 2
        // echo "Estática = {self::$static}<br>";
        echo "Estática = " . self::$static . "<br>";
    }

    public static function mostrarStaticA() { // so acessa membros estáticos
        // echo "Não estática = {$this->naoStatic}<br:>";
        // echo "Estática = {$static}<br>";
        echo "Estática = " . self::$static . "<br>";
    }
}

$objetoA = new A();
$objetoA->mostrarA();
echo "<br>";
$objetoA->mostrarStaticA(); // não é a forma ideal de acessar
echo "<br>";
echo A::$static, "<br>"; // acessar diretamente pela classe
A::mostrarStaticA(); // acessar diretamente pela classe

echo "<br>";
A::$static = 'Alterado membro de classe!';
echo A::$static, "<br>"; // acessar diretamente pela classe