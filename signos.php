<?php

//Se declara un array con los animales que representan los signos del zodiaco chino
$signos = array("rata","buey","tigre","conejo","dragon","serpiente","caballo","cabra","mono","gallo","perro","cerdo");

//Obtenemos los datos que capturamos en el fromulario mediante el método POST
$myyear = $_POST["year"];
$myname = $_POST["name"];
$mylastname = $_POST["lastName"];

//Se calcula el signo chino al que pertenece el usuario
$mysign = miSigno($myyear);

//echo $mysign;
//echo $signos["$mysign"];

//var_dump($var) nos describe a la variable, nos dice tipo, longitud y contenido
echo var_dump($_POST)."<br/>";

//Se imprime el mensaje
echo "<br>";
echo "<b>".$myname." ".$mylastname."</b> naciste en <b>".$myyear."</b> y eres del signo <b>".$signos["$mysign"]."</b> del zodiaco chino";

//El signo del zodiaco chino consta de 12 animales, por lo tanto se repite cada doce años
function miSigno($year){
	$num = (int)$year - 1900;
	$sign = $num%12;
	return $sign;
}

?>