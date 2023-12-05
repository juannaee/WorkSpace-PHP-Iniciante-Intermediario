<?php

$lista = [1, 6, 8, 5, 69, 8, 9];

$lista2 = [
    "Juan" => null,
    "Tully" => 2,
    "Bragui" => 3,

];

var_dump(in_array(2, $lista));
var_dump(array_search(3, $lista2));
echo (array_search(2, $lista2) . PHP_EOL);

if (isset($lista2["Juan"]))
{
    echo "Juan está na lista" . PHP_EOL;
}
else
{
    echo "Juan não está na lista ou é nulo" . PHP_EOL;
}



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