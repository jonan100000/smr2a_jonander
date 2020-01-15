<?php

$nota = rand (1,10);
	$s='APTO';
	if($nota<5)
	$s='NO APTO';
	echo ($nota).'<br>';
	echo $s;