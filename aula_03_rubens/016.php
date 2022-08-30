<?php
/*
Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja 
Se estiver fora do intervalo, informar que não existe o mês

Utilize array.
*/

$meses = [
    1 => "Janeiro",
    2 => "Fevereiro",
    3 => "Março",
    4 => "Abril",
    5 => "Maio",
    6 => "Junho",
    7 => "Julho",
    8 => "Agosto",
    9 => "Setembro",
    10 => "Outubro",
    11 => "Novembro",
    12 => "Dezembro"
];

$mes = $_POST['mes'];

?>

<form method="post" action="016.php">
    <h2>Digite o número do mês: </h2>
    <input type="text" name="mes" id="mes">
    <input type="submit">
</form>

<?php

if (array_key_exists($mes, $meses)) {
    echo $meses[$mes];
} else {
    echo "Mês não existe!";
}

?>