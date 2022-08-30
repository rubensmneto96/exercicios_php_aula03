<?php
/*
Faça o cálculo da média simples de 
$nota_1 e $nota_2.
Imprima a média simples.
Imprima a condição:
    Se a média menor ou igual a 4.9, reprovado.
    Se a média entre 5 e 7, recuperação.
    Se a média acima de 7, aprovado.

Crie uma função com o nome calculo_media.
Crie validações na função, para que os parâmetros aceitos estejam 
entre 0 e 10.
Crie constantes para os limites ( 0 e 10 )
*/
$nota_1 = 9;
$nota_2 = 4;

define(0, 0);
define(10, 10);

function calculo_media($n1, $n2) {
    if ($n1 > 10 || $n1 < 0) {
        echo "Apenas valores entre 0 e 10!";
    } elseif ($n2 > 10 || $n2 < 0) {
        echo "Apenas valores entre 0 e 10!";
    } else {
        $med = ($n1 + $n2) / 2;
    }

    return $med;
}

echo "Média: ";
echo calculo_media($nota_1, $nota_2);


?>