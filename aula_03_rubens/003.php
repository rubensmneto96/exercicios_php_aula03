<?php
/*
Escreva um script que imprima qual o maior número.
Converter variáveis strings em inteiros
Use IF
*/
$a = "10";
$b = "1";

if ($a > $b) {
    $n1 = (int)$a;

    echo "O maior valor é: ";
    echo "<b>";
    echo $n1;
    echo "</b>";
} else {
    $n2 = (int)$b;

    echo "O maior valor é: ";
    echo "<b>";
    echo $n2;
    echo "</b>";
}

?>