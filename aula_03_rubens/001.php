<?php
/*
Variáveis 
*/

$variavel_1 = 'texto';
// Imprimir o valor a variável e o seu tipo

$variavel_2 = 123;
// Imprimir o valor a variável e o seu tipo

$variavel_3 = 1;
// Imprimir o valor a variável e o seu tipo

$array = [
    "foo" => "bar",
    "bar" => "foo",
];
// Imprimir o valor a variável e o seu tipo

echo "Variavel 1 - Valor: <b>$variavel_1</b> - Tipo: ";
echo gettype($variavel_1);

echo "<br>";

echo "Variavel 2 - Valor: <b>$variavel_2</b> - Tipo: ";
echo gettype($variavel_2);

echo "<br>";

echo "Variavel 3 - Valor: <b>$variavel_3</b> - Tipo: ";
echo gettype($variavel_3);

echo "<br>";

echo "Variavel array - Valor: ";
print_r($array);
echo "Tipo: ";
echo gettype($array);

?>