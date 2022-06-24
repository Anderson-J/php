<?php

$conta3 = [
    'titular' => 'Alberto',
    'saldo' => 300
];

$contasCorrentes = [
    1234567890 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    2345678901 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    3456789012  => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

foreach ($contasCorrentes as $indice => $conta) {
    echo "O \"cpf\" é: $indice e a conta é: $conta[titular]" . PHP_EOL;
}