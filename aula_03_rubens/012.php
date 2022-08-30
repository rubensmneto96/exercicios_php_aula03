<?php
/*
Faça o cálculo da média simples de 
$nota_1 e $nota_2.
Imprima a média simples.
Imprima a condição:
    Se a média menor ou igual a 4.9, reprovado.
    Se a média entre 5 e 7, recuperação.
    Se a média acima de 7, aprovado.

Edite a função com o nome calculo_media.
*/
function calculo_media(float $nota_1, float $nota_2): float{
    $med = ($nota_1 + $nota_2) / 2;

    return $med;
}
$nota_1 = 9;
$nota_2 = 4;

$media = calculo_media($nota_1, $nota_2);

echo "Média: ";
echo "<b>";
echo $media;
echo "</b>";

echo "<br>";

if ($media > 7) {
    echo "Aprovado!";
} elseif ($media >= 5 && $media <= 7) {
    echo "Recuperação";
} else {
    echo "Reprovado";
}

?>