<?php
/* $variavel = array(
    "nome" => "Anderson",
    "sobrenome" => "Jorge",
    "idade" => 90,
    "masculino", 
    "exemplo"
);

echo $variavel["nome"]." ";
echo $variavel["idade"] = 91;
print_r($variavel); */
?>

<?php
/* $grupo = array(
    0 => "anderson", 
    1 => "Jorge"
); */

/* $grupo = array("anderson","Jorge");

echo " ".$grupo[0];
echo " ".$grupo[1] = "Paulo"; */
?>

<?php
$produtos = array(
    0 => array(
        "nome" => "celular",
        "quantidade" => "10",
        "informacoes" => "celular top"
    ),
    1 => array(
        "nome" => "notebook",
        "quantidade" => "3",
        "informacoes" => "notebook top"
    )
);

$produtos[] = array(
        "nome" => "impressora",
        "quantidade" => "4",
        "informacoes" => "impressora top"
);

$produtos[] = "teste";

print_r($produtos);

?>