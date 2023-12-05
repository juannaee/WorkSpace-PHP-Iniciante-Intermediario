<?php


$notasBimestre1 = [

     "Juan" => 10,
    "Jonas" => 5,
    "Lucas" => 9,
    "Priscilla" => 10,
    "Maria" => 8,
    "Gabriel" => 7,
    "Mariana" => 6,
    "Pedro" => 9,
    "Carolina" => 8,
    "André" => 7,
    "Beatriz" => 9,
    "Rafael" => 6,
    "Fernanda" => 10,
    "Henrique" => 8,
    "Juliana" => 7

];



$notasBimestre2 = [
    "Mariana" => 6,
    "Pedro" => 9,
    "Carolina" => 8,
    "André" => 7,
    "Beatriz" => 9,
    "Rafael" => 6,
    "Fernanda" => 10,
    "Henrique" => 8,
    "Juliana" => 7
];



$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);

$alunos = array_keys($alunosFaltantes);
$notas = array_values($alunosFaltantes);
$alunosFaltantesTudoJunto = array_combine($notas, $alunos);
var_dump($alunosFaltantesTudoJunto)


?>