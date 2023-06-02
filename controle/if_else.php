<div class="titulo">If Else</div>

<?php

// If
if(false)
    echo "Serei impresso? <br>"; // só o primeiro é associado ao if
    echo "Serei impresso novamente? <br>";

if(false) {
    echo "Serei impresso? <br>";
    echo "Serei impresso novamente?";
}

if(false); { // o ponto e virgula termina a sentença e separa o bloco do if
    echo "Serei impresso? <br>";
    echo "Serei impresso novamente?<br>";
}

// If Else
if (false) 
    echo "verdadeiro<br>";
else
    echo "Falso<br>";

if (true){
    echo "verdadeiro<br>";
} 
else{
    echo "Falso<br>";
}

// Else If
if(false) {
    echo "Passo A<br>";
} else if(false) {
    echo "Passo B<br>";
} else if(true) {
    echo "Passo C<br>";
} else if(true) {
    echo "Passo D<br>";
}

echo "Fim<br>";
