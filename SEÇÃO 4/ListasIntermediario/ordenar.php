<?php



function loop(array $lista, string $chave): void
{

    foreach ($lista as $key => $value)
    {
        echo $key . ": " . $value[$chave] . PHP_EOL;
    }

}


// function ordenaLista(array $lista1, array $lista2): int
// {
//     if ($lista1["Nota"] > $lista2["Nota"])
//     {
//         return 1;
//     }
//     if ($lista1["Nota"] < $lista2["Nota"])
//     {
//         return -1;
//     }

//     return 0;
// }

function ordenaLista(array $nota1, array $nota2): int
{
    return $nota1["Nota"] <=> $nota2["Nota"];
}


$listaDeNomes = [

    "Aluno_1" => [
        "Nome" => "Samuel",
        "Nota" => 10,
        ],


    "Aluno_2" => [
        "Nome" => "Brenno",
        "Nota" => 3,
        ],

    "Aluno_3" => [
        "Nome" => "Juan",
        "Nota" => 8,
        ],


    "Aluno_4" => [
        "Nome" => "Jairo",
        "Nota" => 9,
        ],
    ];


// loop($listaDeNomes, "Nome");
// sort($listaDeNomes);
// echo "----------------------------------" . PHP_EOL;
// loop($listaDeNomes, "Nome");

usort($listaDeNomes, "ordenaLista");


foreach ($listaDeNomes as $key => $aluno)
{
    ["Nome" => $nome, "Nota" => $nota] = $aluno;
    echo "Nome: $nome " . PHP_EOL . "Nota: $nota" . PHP_EOL;
}

?>