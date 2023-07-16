<?php

// este codigo printa a tabuada de 0 até 10 do número continudo na variável;

$numTab = 2;

echo "A tabuada do numero $numTab é: ";
for($i = 0; $i <= 10; $i++)
{
    
    echo "| $numTab x $i = ".$numTab*$i.PHP_EOL;
}

