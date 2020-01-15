<?php

function tipo_lados($a,$b,$c){
	$s='Escaleno';
		if($a==$b or $b==$c or $a==$c)
	$s='Isósceles';
		if($a==$b and $b==$c)
	$s='Equilátero';
		return $s;
}

function tipo_angulos($d,$e,$f){
	$s='Acutángulo';
		if($d==90 or $e==90 or $f==90)
	$s='Rectángulo';
		if ($d>90 or $e>90 or $f>90)
	$s='Obtusángulo';
		return $s;
}

function triangulos ($a,$b,$c,$d,$e,$f){
	$s1=tipo_lados($a,$b,$c);
	$s2=tipo_angulos($d,$e,$f);
	
	return $s1.' - '.$s2;
}

echo triangulos (2,3,3,40,50,90);


