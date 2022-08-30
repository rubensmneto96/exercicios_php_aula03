<?php
/*
Descrubra se $numero é :
 - Divisível por 10
 - Divisível por 3
 - Se não é divisível por nenhum destes 

Imprimir mensagem na tela do número e as condições acima.
*/
$numero = 150;

if ($numero % 10 == 0 && $numero % 3 == 0) {
    echo "É divisível por 10 e 3!";
} else {
    echo "Não é divispivel por 10 e 3!";
}

?>