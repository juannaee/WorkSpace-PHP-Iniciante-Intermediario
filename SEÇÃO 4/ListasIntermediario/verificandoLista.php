<?php

$lista = [1, 6, 8, 5, 69, 8, 9];

$lista2 = [
    "numeroUm" => 1,
    "numeroDois" => 2,
    "numeroTres" => 3,

];

// if (is_array($lista))
// {
//     echo "é array" . PHP_EOL;
// }
// else
// {
//     echo "não é array";
// }

if (array_is_list($lista))
{
    echo "não é uma array associativo!" . PHP_EOL;
    for ($i = 0; $i < count($lista); $i++)
    {
        echo $lista[$i] . PHP_EOL;
    }
    ;

}
else
{
    echo "é uma array associativc!" . PHP_EOL;
    foreach ($lista as $key => $valores)
    {
        echo $key . " " . $valores . PHP_EOL;

    }
    ;
}

?>