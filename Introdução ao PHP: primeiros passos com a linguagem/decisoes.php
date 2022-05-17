<?php

$nome = "Anderson";
$idade = 21;

echo "Você só pode entrar se tiver mais do que 18 anos e seu nome estiver na lista" . PHP_EOL;

if ($idade >= 18 && $nome == "Anderson") {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Olá $nome, Pode entrar" . PHP_EOL;
} else {
    echo "Você não pode entrar pois não atende algum dos critérios," . PHP_EOL;
}

echo PHP_EOL;
echo "Fim do programa";