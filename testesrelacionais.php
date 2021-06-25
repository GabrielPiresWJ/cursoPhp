<?php

$idade = 19;

if ($idade > 18) {
    $concat = "pode entrar." . PHP_EOL;

} else {
    $concat = "não pode entrar." . PHP_EOL;
}

echo "Sua idade é $idade, " . "$concat";