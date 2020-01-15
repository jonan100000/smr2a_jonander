<?php

$nota = rand(1,10);
$s= 'PENDIENTE';
	if($nota>=5)
		$s='APROBADO';
	if($nota>=7)
		$s='NOTABLE';
	if($nota>=8.5)
		$s='SOBRESALIENTE';

	echo ($nota).'<br>';
	echo ($s);