<?php

// a tabela de IMC foi retiradad o site: https://superafarma.com.br/calcule-o-seu-imc-calculadora-peso-ideal/

$altura = 1.80;
$peso = 90;

echo "O valor da altura em m: $altura \nO valor do peso em kg: $peso \n";

// Calculando o índice de massa corporal (IMC)...";
$imc = ($peso / ($altura**2));

// Frase que mostra o IMC
$frase = "O seu IMC é: $imc.\n";

if($imc < 16)
{
    echo "$frase Você está muito abaixo do peso! \nProcure um médico.";
}elseif ($imc >= 17 && $imc <= 18.4) {
    echo "$frase Você está abaixo do peso.";
}elseif($imc > 18.5 && $imc <= 24.9)
{
    echo "$frase VocÊ está com o peso normal! PARABÉNS!";
}elseif($imc > 25 && $imc <= 29.9)
{
    echo "$frase VocÊ está acima do peso!\n Toma cuidado";
}elseif($imc > 30 && $imc <= 34)
{
    echo "$frase Você está na obesidade I\n Procure um médico!";
}elseif($imc > 35 && $imc <= 40)
{
    echo "$frase Você está na obesidade II\n Procure um médico!";
}elseif($imc > 40)
{
    echo "$frase Você está na obesidade III cara..\n Procure um médico agora!";
}

