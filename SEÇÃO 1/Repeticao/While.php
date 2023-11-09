<?php

$contador = 0;
$limitador = 5;


while ($contador < $limitador)
{
    $contador++;
    echo "Contador: $contador" . PHP_EOL;
}

$limitadorDois = 10000;
for ($contadorDois = 0; $contadorDois < $limitadorDois + 1; $contadorDois++)
{
    if ($contadorDois == 2)
    {
        continue;
    }
    else if ($contadorDois == 10)
    {
        break;
    }

    echo "Contador_2: $contadorDois" . PHP_EOL;

}
