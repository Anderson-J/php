<?php


// Organize uma sequência numérica de 1 a 100 exibindo apenas os números ímpares


echo "Primeira maneira" . PHP_EOL;

for ($i = 1; $i <= 100; $i += 2) {
    echo "$i" . PHP_EOL;
}
echo PHP_EOL;

echo "Segunda maneira" . PHP_EOL;

$contador = 1;
while ($contador <= 100) {
    if ($contador % 2 != 0) {
        echo "$contador" . PHP_EOL;
    }
    $contador++;
}