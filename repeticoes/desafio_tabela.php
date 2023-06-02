<div class="titulo">Desafio Tabela #01</div>

<?php

$matriz = [
    ['01', '02', '03', '04', '05'],
    ['06', '07', '08', '09', '10'],
    ['11', '12', '13', '14', '15'],
    ['16', '17', '18', '19', '20']
];

foreach ($matriz as $linha) {
    foreach ($linha as $valor) {
        echo "$valor ";
    }
    echo "<br>";
}

echo "<table>";
foreach ($matriz as $linha) {
    echo "<tr>";
    foreach ($linha as $valor) {
        echo "<td>$valor</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<table>";
foreach ($matriz as $indice => $linha) {
    if ($indice % 2 === 1) {
        echo "<tr class='cor'>";
    } else {
        echo "<tr>";
    }
    foreach ($linha as $valor) {
        echo "<td>$valor</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>

<table>
    <?php
        foreach($matriz as $linha) {
            echo '<tr>';
            foreach ($linha as $valor) {
                echo "<td>$valor</td>";
            }
            echo '</tr>';
        }
    ?>
</table>
<table>
    <?php
        foreach($matriz as $indice => $linha) {
            $cor = $indice % 2 === 1 ? 'cor' : '';
            echo "<tr class='{$cor}'>";
            foreach ($linha as $valor) {
                echo "<td>$valor</td>";
            }
            echo '</tr>';
        }
    ?>
</table>

<style>
    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0;
    }

    table tr {
        border: 1px solid #444;
    }

    table td {
        padding: 10px 20px;
    }

    .cor {
        background-color: lightblue;
    }
</style>