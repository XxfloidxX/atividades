<?php

date_default_timezone_set("Brazil/East");

$dataAtual = getdate();

echo "<b>hora certa: <b/>";
echo '<meta http-equiv="refresh" content="1">';

$diaSemana = $dataAtual["wday"];

switch($diaSemana){

	case 0:
		echo "domingo";
		break;
	case 1:
		echo "segunda";
		break;
	case 2:
		echo "terça";
		break;
	case 3:
		echo "quarta";
		break;
	case 4:
		echo "quinta";
		break;
	case 5:
		echo "sexta";
		break;
	case 6:
		echo "sabádo";
		break;
}

echo ", ";


echo $dataAtual["mday"];
echo "/";
echo $dataAtual["mon"];
echo "/";
echo $dataAtual["year"];

echo "<br/>" . "<br/>";

echo $dataAtual["hours"] -1;
echo ":";
echo $dataAtual["minutes"];
echo ":";
echo $dataAtual["seconds"] . "<br/>" . "<br/>";



?>
	
