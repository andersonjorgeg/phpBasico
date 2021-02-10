<?php

/* $nomes = array("Anderson", "André", "Junior", "Lucas");

foreach($nomes as $aluno) {
    echo "Aluno: ".$aluno."<br>";
} */

/* $nomes = array(
    array("nome"=>"Anderson", "idade"=>35),
    array("nome"=>"Junior", "idade"=>29),
    array("nome"=>"Alan", "idade"=>35),
    array("nome"=>"Lucas", "idade"=>4)
);

foreach($nomes as $aluno) {
    echo "Aluno: ".$aluno["nome"]." - idade: ".$aluno["idade"]."<br>";
} */

$aluno = array(
//  chave      valor
    "nome" => "Anderson",
    "idade" => 35,
    "estado" => "RJ",
    "Pais" => "Brasil"

);

foreach($aluno as $chave => $valor) {
    echo $chave.": ".$valor."<br>";
}

?>
