<?php

function tipo_lados($a,$b,$c){
	$s='Escaleno';
		if($a==$b or $b==$c or $a==$c)
	$s='Isósceles';
		if($a==$b and $b==$c)
	$s='Equilatero';
		return $s;
}
echo tipo_lados(3,2,3).'<br>';
