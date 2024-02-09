
<div style='max-width:800px;margin:auto'>
<form name="retro" id='retro' method="GET" action="" onsubmit="return check_data();">
	<div>
		<span data-title="Megadhatja a szerző vagy együttes nevét">
		<img class='icon' src='./front/img/info-icon.png'>
		</span>
		<label>
		Szerző:
		</label>
		<select name="szerzo" id="szerzo">
			<option value="mind">Összes</option>
			<?php foreach (szerzok() as $sz) echo "<option value='$sz'>$sz</option>" ?>
		</select>
	</div>
	<div>
		<span data-title="Megadhatja a keresett címet, vagy egy részletét">
		<img class='icon' src='./front/img/info-icon.png'>
		</span>
		<label>Cím:</label>
		<input type="text" name='cim'>
	</div>
	<div>
		<span data-title="Megadhatja, hogy milyen fajta lemezt keres">
		<img class='icon' src='./front/img/info-icon.png'>
		</span>
		<label>Megjelenés:</label>
		<input name="megjelenes" type="radio" value="CD" id='cd'><label class='radio' for='cd'>  CD</label>
		<input name="megjelenes" type="radio" value="MC" id='mc'><label class='radio' for='mc'>  MC</label>
		<input name="megjelenes" type="radio" value="mindegy" id='m' checked> <label class='radio' for='m'>  mindegy</label>
	</div>
	<div>
		<span data-title="Megadhatja, hogy milyen árkategóriában keres">
		<img class='icon' src='./front/img/info-icon.png'>
		</span>
		<label>Árkategória:</label>
		min. <input type='number' id='min' name='min' value='<?php echo minAr(); ?>' >
		max. <input type='number' id='max' name='max' value='<?php echo maxAr(); ?>' >Ft
	</div>
	<div>
		<input type='submit' name="keres" value='Keres'>
	</div>
</form>
<script>
	var minAr= <?php echo minAr(); ?>;
	var maxAr= <?php echo maxAr(); ?>;
</script>
<script src='./front/js/scripts.js'></script>
</div>