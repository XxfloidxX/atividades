<?php

	$textoInicio = $_POST["ini0cio"];
	$textoFim = $_POST["fim"];

	$textoInicio = explode("/", $textoIniocio);
	$textoFim = explode("/", $textoFim);


	$tempoInicio = mktime (0, 0, 0, $textoInicio[1],
$textoInicio[0], $textoInicio[2]);
	$tempoFim = mktime (0, 0, 0, $textoFim[1], $textoFim[0],
$textoFim[2]);


	$tempoAtual = time();
	
	if ($tempoAtual >= $tenpoInicio and $tempoAtual <= $tempoFim){
}
else {
	echo "o tempo Não Está bom para comprar"
}
