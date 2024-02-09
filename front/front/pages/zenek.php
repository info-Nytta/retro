<?php
$lista=getApi($apiUrl."?szerzo=mind");
?>
<p style='text-align:center;'>
	Összesen <?php echo count($lista);?> lemez szerepel az adatbázisunkban. 
	<br>Az árak a lemezek megjelenéskori aktuális bruttó árai.
</p>
<div class='galery-contener'>
<?php for ($i=0; $i<count($lista); $i++) { ?>

	<div class='galery-item'>
		<div class='galery-img'>
			<span data-title='<?php echo $lista[$i]["megjelenes"]." lemez ".$lista[$i]["ar"]." ft";?>'>
			<img src='./front/img/<?php 
			if ($lista[$i]["megjelenes"]=="MC") 
				$lemez="mc-".rand(1,8); 
			else $lemez="cd"; 
				echo $lemez 
			?>.png'>
			</span>
		</div>
		<div class='galery-item-caption'>
		<?php echo "<strong>".$lista[$i]["szerzo"]."</strong><br>".$lista[$i]["cim"] ?>
		</div>
	</div>

<?php } ?>
</div>
