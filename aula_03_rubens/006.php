<?php
/*
Crie um script que apresente o tipo de $array e os valores presentes.
Neste mesmo script, tente acessar na $array com a chave 'teste' e descubra o que acontece.
*/ 
$array = [
    "n1" => 10,
    "n2" => 20,
    "n3" => 30,
    "n4" => 'oi mundo',
];

echo "Tipo: ";
echo gettype($array);

echo "<br>";

print_r($array);

echo "<br>";
echo "<br>";

echo "Tentando acessar a chave 'teste': ";

echo "<br>";

echo $array['teste'];

?>