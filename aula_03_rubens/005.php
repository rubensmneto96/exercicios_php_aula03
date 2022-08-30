<?php
/*
Escreva um script que imprima qual o maior número.
Use IF .. ELSE
*/
$a = 10;
$b = 1;
$c = 40;

if ($a > $b && $a > $c) {
    echo "O maior valor é: ";
    echo "<b>";
    echo $a;
    echo "</b>";
} elseif ($b > $c && $b > $a) {
    echo "O maior valor é: ";
    echo "<b>";
    echo $b;
    echo "</b>";
} else {
    echo "O maior valor é: ";
    echo "<b>";
    echo $c;
    echo "</b>";
}

?>