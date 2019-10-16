<a href="http://192.168.0.138/smr2a_cristian/smr2a.php">Cristian</a>
Jon Ander Elvira
<a href="http://192.168.0.106/smr2a_anabella/smr2a.php">Anabella</a>
<html>
	<h1>
		<a href="http://192.168.0.31/smr2a_jonander/catalogo.php">GITHUB</a>
	</h1>
	</html>
	<a>Email</a>
<form>
	<input name="email" type="email">
	<a Email</a> <button>Enviar</button>
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
