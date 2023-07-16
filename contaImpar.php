<?php

// Este programa conta de 0 até 10 utilizando somente números ímpares
for($i = 0; $i < 100; $i++)
{
    if(($i % 2) != 0)
    {
        echo "valor de i: $i".PHP_EOL;
    }
}