<?php

$peso = 100;
$altura = 1.83;

$imc = $peso / ($altura ** 2);

echo "Seu IMC é de $imc, Você está com o IMC ";

if ($imc < 18) {
    echo "abaixo";
} elseif ($imc < 25) {
    echo "dentro";
} else {
    echo "acima";
}

echo " do recomendado." . PHP_EOL;