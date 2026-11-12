<?php

$numTries = 0;
$min = (int) readline("\nDigite o valor minimo do intervalo: ");
$max = (int) readline("\nDigite o valor maximo do intervalo. (Maior que o Min): ");
$valAdi = 0;

while ($max <= $min) {
    echo "\nO maximo deve ser maior que o minimo.\n";

    $max = (int) readline("\nDigite novamente o valor maximo: ");
}

$numRandom = rand($min , $max);


while ($valAdi != $numRandom) 
{

    $valAdi = (int) readline("\nTente adivinhar o numero: ");

    $numTries++;

    if ($valAdi < $numRandom) 
    {
        echo "\nO numero eh maior.\n";
    } 
    elseif ($valAdi > $numRandom) 
    {
        echo "\nO numero eh menor.\n";
    }

}

echo "\nAcertou.";


?>
