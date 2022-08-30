<?php
/*
Crie uma função que demonstre 
 - Passagem por valor.
 - Passagem por referência.

 
*/

$num = 10;

function passagem_valor($n) {
    $n *= 10;
}

function passagem_referência(&$n) {
    $n *= 10;
}

echo "Passagem por valor: ";
passagem_valor($num);
echo "<b>";
echo $num;
echo "</b>";

echo "<br>";

echo "Passagem por referência: ";
passagem_referência($num);
echo "<b>";
echo $num;
echo "</b>";

?>