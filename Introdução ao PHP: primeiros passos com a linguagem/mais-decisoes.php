<?php

$idade = 17;
$numeroDePessoas = 2;

echo "Você só pode entrar a partir dos 18 anos ou";
echo PHP_EOL;
echo "a partir de 16 anos acompanhado";
echo PHP_EOL;
echo PHP_EOL;

if ($idade > 18) {
    echo "A sua idade é: $idade, pode entrar";
} else if ($idade >= 16 && $numeroDePessoas > 1) {
    echo "A sua idade é: $idade, mas por estar acompanhado pode entrar";
} else {
    echo "você não atende as condições necessárias para poder entrar";
}

echo PHP_EOL;

echo "Fim do programa";

echo PHP_EOL;
