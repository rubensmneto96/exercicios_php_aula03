<?php
/*
Importar a função criada em 014_a.php para ser utilizada aqui.
*/

include "014_a.php";

$nota_1 = 9;
$nota_2 = 4;
// Calcular chamando a função
$media1 = calculo_media($nota_1, $nota_2);
echo "Média 1: ";
echo $media1;

echo "<br>";
echo "<br>";

$nota_1 = 1;
$nota_2 = 5;
// Calcular chamando a função
$media2 = calculo_media($nota_1, $nota_2);
echo "Média 2: ";
echo $media2;

echo "<br>";
echo "<br>";

$nota_1 = 5;
$nota_2 = 3;
// Calcular chamando a função
$media3 = calculo_media($nota_1, $nota_2);
echo "Média 3: ";
echo $media3;

echo "<br>";
echo "<br>";

?>