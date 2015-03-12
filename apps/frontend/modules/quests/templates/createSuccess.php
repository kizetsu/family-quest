<div class="row">
	<div class="col-md-4">
		<span>Name:</span>
	</div>
	<div class="col-md-8">
		<input type="text" name="name" id="name" />
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<span>Beschreibung:</span>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<textarea name="description" id="description"/>
	</div>
</div>
<div class="row">
	<div class="col-md-4">
		<span>Ort:</span>
	</div>
	<div class="col-md-8">
		<input type="text" name="location" id="location" />
	</div>
</div>
<div class="row">
	<div class="col-md-4">
		<span>Erfahrung:</span>
	</div>
	<div class="col-md-8">
		<input type="text" name="xp" id="xp" /><span> XP</span>
	</div>
</div>
<div class="row">
	<div class="col-md-4">
		<span>Zeitraum:</span>
	</div>
	<div class="col-md-8">
		<input type="text" name="time" id="time" /><span> Minuten</span>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<span>Statuswerte:</span>
	</div>
	<div class="col-md-12">
		<div class="row">
			FOREACH (STATS)
			<div class="col-md-6">
				<select>
					<option>ATK</option>
					<option>DEF</option>
					<option>INT</option>
					<option>CAR</option>
					<option></option>
					<option></option>
				</select>
			</div>
			ENDFOREACH
			<div class="col-md-6">
				PLUS_ICON | MINUS-ICON
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<span>Items:</span>
	</div>
	<div class="col-md-12">
		<div class="row">
			FOREACH (ITEMS)
			<div class="col-md-6">
				<select>
					FOREACH (ITEMS STOCK)
					<option>ITEM</option>
					ENDFOREACH
				</select>
			</div>
			ENDFOREACH
			<div class="col-md-6">
				PLUS_ICON | MINUS-ICON
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<span>Monster:</span>
	</div>
	<div class="col-md-12">
		<div class="row">
			FOREACH (MONSTER)
			<div class="col-md-6">
				<select>
					FOREACH (MONSTER STOCK)
					<option>MONSTER</option>
					ENDFOREACH
				</select>
			</div>
			ENDFOREACH
			<div class="col-md-6">
				PLUS_ICON | MINUS-ICON
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-4">
		<span>Status:</span>
	</div>
	<div class="col-md-8">
		<select>
			<option>ATKIV</option>
			<option>QUEST</option>
			<option>INAKTIV</option>
		</select>
	</div>
</div>