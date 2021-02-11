<?php

//? array_keys() — Retorna todas as chaves ou uma parte das chaves de um array
//? https://www.php.net/manual/pt_BR/function.array-keys.php

$vetor = array(
    "nome" => "Anderson",
    "idade" => 35,
    "cidade" => "Itaguaí",
    "pais" => "Brasil"
);

$chaves = array_keys($vetor);

print_r($chaves);
echo "<br><br>";
echo "chave 0: ".$chaves[0]."<br>";
echo "chave 1: ".$chaves[1]."<br>";
echo "chave 2: ".$chaves[2]."<br>";
echo "chave 3: ".$chaves[3]."<br>";

//? array_values() — Retorna todos os valores de um array
//? https://www.php.net/manual/pt_BR/function.array-values.php

$vetor1 = array(
    "nome" => "Anderson",
    "idade" => 35,
    "cidade" => "Itaguaí",
    "pais" => "Brasil"
);

$valor = array_values($vetor1);

print_r($valor);
echo "<br><br>";
echo "valor 0: ".$valor[0]."<br>";
echo "valor 1: ".$valor[1]."<br>";
echo "valor 2: ".$valor[2]."<br>";
echo "valor 3: ".$valor[3]."<br><br>";

// ?array_pop() — Extrai um elemento do final do array
//? https://www.php.net/manual/pt_BR/function.array-pop.php

$vetor2 = array(
    "nome" => "Anderson",
    "idade" => 35,
    "cidade" => "Itaguaí",
    "pais" => "Brasil"
);

echo "item removido do vetor: ".array_pop($vetor2)."<br><br>";

print_r($vetor2);
echo "<br><br>";

//? array_shift — Retira o primeiro elemento de um array
//? https://www.php.net/manual/pt_BR/function.array-shift.php

$vetor3 = array(
    "nome" => "Anderson",
    "idade" => 35,
    "cidade" => "Itaguaí",
    "pais" => "Brasil"
);

echo "item removido do vetor: ".array_shift($vetor3) . "<br><br>";

print_r($vetor3);
echo "<br><br>";

//? arsort() — Ordena um array em ordem descrescente mantendo a associação entre índices e valores
//? https://www.php.net/manual/pt_BR/function.arsort.php

$vetor4 = array(
    "José",
    "Alexandre",
    "Zefinha",
    "Haroldo"
);

arsort($vetor4);

print_r($vetor4);
echo "<br><br>";

//? asort — Ordena um array mantendo a associação entre índices e valores
//? https://www.php.net/manual/pt_BR/function.asort.php

$vetor5 = array(
    "José",
    "Alexandre",
    "Zefinha",
    "Haroldo"
);

asort($vetor5);

print_r($vetor5);
echo "<br><br>";

//? count() — Conta o número de elementos de uma variável, ou propriedades de um objeto
//? https://www.php.net/manual/pt_BR/function.count.php

$vetor6 = array(
    "José",
    "Alexandre",
    "Zefinha",
    "Haroldo"
);

echo "Total de alunos: ".count($vetor6);
echo "<br><br>";

//? in_array() — Checa se um valor existe em um array
//? https://www.php.net/manual/pt_BR/function.in-array.php

$vetor7 = array(
    "José",
    "Alexandre",
    "Zefinha",
    "Haroldo"
);

if(in_array("Alexandre", $vetor7)){
    echo "Alexandre está na lista";
    echo "<br><br>";
} else {
    echo "Alexandre não esta na lista";
    echo "<br><br>";
}

if(in_array("Maria", $vetor7)){
    echo "Maria está na lista";
    echo "<br><br>";
} else {
    echo "Maria não esta na lista";
    echo "<br><br>";
}

?>
