<?php 

/*//? função abs(); - Retorna o valor absoluto do numero. 
//? https://www.php.net/manual/pt_BR/function.abs.php */
echo abs(3 - 4)."<br>";

/*//? função round(); - Arredonda um número
//? https://www.php.net/manual/pt_BR/function.round.php */
echo round(5.8)."<br>";
echo round(5.4)."<br>";

/*//? função ceil() - Arredonda frações para cima
//? https://www.php.net/manual/pt_BR/function.ceil.php */
echo ceil(5.8)."<br>";
echo ceil(5.4)."<br>";

/*//? função floor() - Arredonda frações para baixo
//? https://www.php.net/manual/pt_BR/function.floor.php */
echo floor(5.8)."<br>";
echo floor(5.4)."<br>";

/*//? função rand() - Gera um inteiro aleatório
//? https://www.php.net/manual/pt_BR/function.rand.php */
echo rand(1, 5)."<br>";

//? exemplo sorteio simples com a função rand()
$lista = array("Anderson", "Junior", "André", "Luca", "João");

$x = rand(0, 4);

echo "E o sorteado é: ".$lista[$x];

?>