<?php

function tipo_angulos($a,$b,$c){
	$r='Acutángulo';
		if($a==90 or $b==90 or $c==90)
	$r='Rectángulo';
		if ($a>90 or $b>90 or $c>90)
	$r='Obtusángulo';
		return $r;
}	

echo tipo_angulos(80,50,50);
;