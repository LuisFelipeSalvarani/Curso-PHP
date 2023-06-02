<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metros > Km</option>
        <option value="km-metro">Km > Metros</option>
        <option value="c-f">Celsius > Fahrenheit</option>
        <option value="f-c">Fahrenheit > Celsius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php

const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_C_F_1 = 1.8;
const FATOR_C_F_2 = 32;

$valor = $_POST['param'] ?? 0;

switch ($_POST['conversao']) {
    case 'km-milha':
        $resultado = $valor * FATOR_KM_MILHA;
        $medida = "$valor Km = $resultado Milha(s)";
        break;
    case 'milha-km':
        $resultado = $valor / FATOR_KM_MILHA;
        $medida = "$valor Milhas = $resultado Km(s)";
        break;
    case 'metro-km':
        $resultado = $valor / FATOR_METRO_KM;
        $medida = "$valor Metros = $resultado Km(s)";
        break;
    case 'km-metro':
        $resultado = $valor * FATOR_METRO_KM;
        $medida = "$valor Km = $resultado Metro(s)";
        break;
    case 'c-f':
        $resultado = $valor * FATOR_C_F_1 + FATOR_C_F_2;
        $medida = "{$valor}° Celsius = $resultado Fahrenheit";
        break;
    case 'f-c':
        $resultado = ($valor - FATOR_C_F_2) / FATOR_C_F_1;
        $medida = "{$valor}° Fahrenheit = $resultado Celsius";
        break;
    default:
        $medida = "Nenhum valor calculado!";
}

echo $medida;