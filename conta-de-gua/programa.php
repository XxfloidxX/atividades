<?php

$mes1 = 0;
$mes2 = 0;
$mes3 = 0;
$media = 0;
$mes1 = $_POST["mes1"];
$mes2 = $_POST["mes2"];
$mes3 = $_POST["mes3"];

$mediaConta = ($mes1+$mes2+$mes3)/3;
echo "sua média da conta é " . $mediaConta . "<br/>";

$mediaConsumo=($media / 2.50);
echo "sua média de consumo é " . $mediaConsumo . "m3 <br/>";

echo "a previsão da sua proxima conta com o aumento da tarifa é de R$ " . ($mediaConsumo * 3.50);

?>
