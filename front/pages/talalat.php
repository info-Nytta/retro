<?php

$szerzo=str_replace(" ","%20%",$_GET["szerzo"]);
$lista=getApi($apiUrl."?szerzo=".$szerzo);
$talalat=array();

foreach ($lista as $elem) {
	if ( ( ($_GET["megjelenes"]=="mindegy") || ($_GET["megjelenes"]!="mindegy" && $elem["megjelenes"]==$_GET["megjelenes"]) ) &&
			 ( intval($elem["ar"])>=intval($_GET["min"]) && intval($elem["ar"])<=intval($_GET["max"]) ) && 
			 ( $_GET["cim"]=="" || strtolower($_GET["cim"])==strtolower($elem["cim"]) || strpos(strtolower($elem["cim"]),strtolower($_GET["cim"]))!==false )  )
		array_push($talalat,$elem);
}
?>

<div >
<p class="center">
<?php 
	echo "Szerző: $_GET[szerzo] Cím: "; 
	if ($_GET["cim"]=="") echo "-"; else echo $_GET["cim"]; 
	echo " Megjelenés: ";
	if ($_GET["megjelenes"]=="mindegy") echo "-"; else echo $_GET["megjelenes"]; 
	echo " Ár: $_GET[min] - $_GET[max] Ft";
?>
<br>
Találatok száma: <?php echo count($talalat); ?>
</p class="center">
</div>

<?php if (count($talalat)>0) { ?>

<table>
	<tr class='no-mobil'><th class='left'>Szerző</th><th class='left'>Album</th><th>Megjelenés</th><th>Ár</th></tr>
	<?php 
	foreach ($talalat as $elem)
		echo "<tr><td class='left'>$elem[szerzo]</td><td class='left'>$elem[cim]</td><td class='center'>$elem[megjelenes]</td><td class='right'>$elem[ar]<span class='no-mobil'> Ft</span></td></tr>";
	?>
</table>

<?php } ?>

<pre>
<?php //print_r($talalat); ?>
</pre>