<!-- //? enviando os dados para outro arquivo -->
<!-- <form method="POST" action="recebedor.php">
    E-mail: <br>
    <input type="text" name="email"><br><br>

    <input type="submit" value="Enviar Dados">
</form> -->

<!-- //? enviando para esse mesmo arquivo -->
<?php
/* require "recebedor.php";*/ /*//? se acontecer algum erro no código vai parar */ 
require_once "recebedor.php"; /*//? só vai importar uma vez */
?>
<form method="POST" >
    E-mail: <br>
    <input type="text" name="email"><br><br>

    <input type="submit" value="Enviar Dados">
</form>


<!-- <?php
include "recebedor.php";
?>
<form method="POST" >
    E-mail: <br>
    <input type="text" name="email"><br><br>

    <input type="submit" value="Enviar Dados">
</form> -->