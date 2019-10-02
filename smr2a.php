<a href="http://192.168.0.106/smr2a_anabella/smr2a.php">Anabella</a>
Jon Ander
<a href="http://192.168.0.115/smr2a_cristian/smr2a.php">Cristian</a>

<form>
	<input name="email" type="email">
	<button>Enviar</button>
</form>

<?php
$f=fopen('visitas.txt' , 'a');
fwrite($f,date('Y-m-d H:i:s '));
fwrite ($f,$_SERVER['REMOTE_ADDR']);
fwrite ($f, "\r\n");
fclose($f);
?>

<?php
if(isset($_GET['email'])){
	$f=fopen('suscriptores.txt','a');
	fwrite($f,$_GET['email']);
	fwrite($f,"\r\n");
	fclose($f);
}
?>
