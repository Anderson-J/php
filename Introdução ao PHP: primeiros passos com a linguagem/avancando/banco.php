<?php

function exibeMensagem($mensagem)
{
    echo $mensagem . PHP_EOL;
}

function sacar($conta, $valorASacar)
{
    if ($conta['saldo'] < $valorASacar) {
        exibeMensagem('Você não pode sacar');
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

$contasCorrentes =[
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => '300'
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => '100'
    ]
];

$contasCorrentes['123.456.789-10']['saldo'] -= 500;

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 50000);

foreach ($contasCorrentes as $cpf => $conta) {
    echo "$cpf $conta[titular] $conta[saldo]" . PHP_EOL;
}