<?php
//? gerando uma sessão em php
/* session_start(); */

//? $_SESSION - array global
/* $_SESSION["teste"] = "anderson jorge";

echo "Sessão foi feita..." */

/* echo "Meu nome é ".$_SESSION["teste"]; */

//? gerando um cookie em php

/* setcookie("meuTeste", "Fulano de tal", time()+3600);//?("chave", "valor", tempo do cookie)

echo "cookie setado com sucesso!"; */

echo "Meu cookie é de: ".$_COOKIE["meuTeste"];
?>