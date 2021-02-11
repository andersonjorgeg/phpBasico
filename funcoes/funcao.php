<?php

function somarNumero($x, $y){
    /* $conta = $x + $y;
    return = $conta; */
    return $x + $y;
}

$resultado = somarNumero(4, 6);

echo "resultado = ".$resultado."<br><br>";

function mostrarNome() {
    /* echo "nome"; */ //? evitar de usar esse comando dentro da função
    return "Anderson";
}
echo "Meu nome é: ".mostrarNome();

?>