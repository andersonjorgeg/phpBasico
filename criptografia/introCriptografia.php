<?php

//? criptografia irreversível - padrão md5
$nome = "Anderson";
$nome2 = md5($nome);

echo "Nome original: ".$nome."<br>";
echo "Nome criptografado: ".$nome2."<br><br>";

//? criptografia reversível - padrão base64
$nome3 = "Anderson";
$nome4 = base64_encode($nome3);

echo "Nome original: ".$nome3."<br>";
echo "Nome criptografado: ".$nome4."<br><br>";

//? revertendo a criptografia do padrão base64

$codigo = "QW5kZXJzb24=";

echo "Nome original: ".$codigo."<br>";
echo "Nome descriptografado: ".base64_decode($codigo)."<br><br>";

?>