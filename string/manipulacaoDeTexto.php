<?php

//? explode() - Divide uma string em strings
//? https://www.php.net/manual/pt_BR/function.explode.php

$nome = "Anderson Jorge Gonçalves";

$nomes = explode(" ", $nome);
echo "primeiro nome: ".$nomes[0]."<br>";
echo "segundo nome: ".$nomes[1]."<br>";
echo "terceiro nome: ".$nomes[2]."<br><br>";
print_r($nomes);
echo "<br><br>";

//? implode() — Junta elementos de uma matriz em uma string
//? https://www.php.net/manual/pt_BR/function.implode.php

$vetor = array("Anderson","Jorge", "Gonçalves");

$nomeCompleto = implode(" ", $vetor);
echo "Meu nome completo é ".$nomeCompleto."<br><br>";

//? number_format() — Formata um número com os milhares agrupados
//? https://www.php.net/manual/pt_BR/function.number-format.php
$formatarNumero = number_format(8.263542756357, 2);
$formatarNumero2 = number_format(82635.42756357, 2, ",", ".");
$formatarNumero3 = number_format(82635.42756357, 2, ",", "");
echo "O numero formatado é ".$formatarNumero."<br><br>";
echo "O numero formatado é ".$formatarNumero2."<br><br>";
echo "O numero formatado é ".$formatarNumero3."<br><br>";

//? str_replace() — Substitui todas as ocorrências da string de procura com a string de substituição
//? https://www.php.net/manual/pt_BR/function.str-replace.php

$texto = "O rato roeu a roupa!";
$trocarPalavra = str_replace("roeu", "comeu", $texto);

echo "texto original - (O rato roeu a roupa!) texto trocado - (".$trocarPalavra.")<br><br>";

//? strtolower() — Converte uma string para minúsculas
//? https://www.php.net/manual/pt_BR/function.strtolower.php

echo strtolower("ANDERSON JORGE");
echo "<br><br>";

//? strtoupper() — Converte uma string para maiúsculas
//? https://www.php.net/manual/pt_BR/function.strtoupper.php

echo strtoupper("anderson jorge");
echo "<br><br>";

//?substr() — Retorna uma parte de uma string
//? https://www.php.net/manual/pt_BR/function.substr.php

$texto2 = "Anderson";

$palavra2 = substr($texto2, 0, 3);
$palavra3 = substr($texto2, 5);

echo "A palavra cortada é ".$palavra2."<br><br>";
echo "A palavra cortada é ".$palavra3."<br><br>";

//? ucfirst() — Converte para maiúscula o primeiro caractere de uma string
//? https://www.php.net/manual/pt_BR/function.ucfirst.php

$nome2 = "anderson";
$nome3 = "anderson jorge";

echo "Nome com a primeira letra maiúscula ".ucfirst($nome2)."<br><br>";
echo "Nome com a primeira letra maiúscula ".ucfirst($nome3)."<br><br>";

//? ucwords() — Converte para maiúsculas o primeiro caractere de cada palavra
//? https://www.php.net/manual/pt_BR/function.ucwords.php

$nome4 = "anderson";
$nome5 = "anderson jorge";

echo "Nome com a primeira letra maiúscula ".ucwords($nome4)."<br><br>";
echo "Nome com a primeira letra maiúscula ".ucwords($nome5)."<br><br>";


?>