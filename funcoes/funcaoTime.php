<?php 

$x = time(); //? retorna o tempo em segundos desde 1970 https://www.php.net/manual/pt_BR/function.time.php

echo $x."<br><br>";

$y = mktime(2,10,30,1,1,1970); //? https://www.php.net/manual/pt_BR/function.mktime.php

echo "Se passaram 2 horas 10 minutos e 30 segundos com um total de".$y." segundos desde 1970 <br><br>";

//?converter string para tempo - https://www.php.net/manual/pt_BR/function.strtotime.php
$dataProximaMarcoZero = date('d/m/Y', strtotime("+10 days", 0));//? marco zero

echo "data daqui a 10 dias a partir do marco zero ".$dataProximaMarcoZero."<br><br>";

$dataProxima = date('d/m/Y', strtotime("+10 days"));//? data atual do servidor 

echo "data daqui a 10 dias a partir da data do servidor ".$dataProxima."<br>";

?>