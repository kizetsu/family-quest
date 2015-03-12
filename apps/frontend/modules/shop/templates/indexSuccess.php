<div class="row">
	<div class="col-md-2"><span>GOLD G</span></div>
	<div class="col-md-10"></div>
</div>
<div class="row">
	<div class="col-md-4">Inventar</div>
	<div class="col-md-4">Kaufen / Verkaufen</div>
	<div class="col-md-4">Shop</div>
</div>
<div class="row">
	<div class="col-md-4">
		<table class="shadow">
			<tr>
				<th>Item</th>
				<th>Unique</th>
				<th>Preis</th>
				<th>Aktion</th>
			</tr>
			FOREACH (USER)
			<tr>
				<td>ITEMNAME</td>
				<td>UNIQUE</td>
				<td>PREIS</td>
				<td>SELL-ICON</td>
			</tr>
			<tr>
				<td>Info: </td>
				<td colspan="3">BESCHREIBUNG</td>
			</tr>
			ENDFOREACH
		</table>
	</div>
	<div class="col-md-4">
		<table class="shadow">
			<tr>
				<th>Item</th>
				<th>Unique</th>
				<th>Preis</th>
				<th>Aktion</th>
			</tr>
			FOREACH (BUY)
			<tr>
				<td>ITEMNAME</td>
				<td>UNIQUE</td>
				<td>PREIS</td>
				<td>SELL-ICON</td>
			</tr>
			<tr>
				<td>Info: </td>
				<td colspan="3">BESCHREIBUNG</td>
			</tr>
			ENDFOREACH
		</table>
	</div>
	<div class="col-md-4">
		<table class="shadow">
			<tr>
				<th>Item</th>
				<th>Unique</th>
				<th>Preis</th>
				<th>Aktion</th>
			</tr>
			FOREACH (SHOP)
			<tr>
				<td>ITEMNAME</td>
				<td>UNIQUE</td>
				<td>PREIS</td>
				<td>SELL-ICON</td>
			</tr>
			<tr>
				<td>Info: </td>
				<td colspan="3">BESCHREIBUNG</td>
			</tr>
			ENDFOREACH
		</table>
	</div>
</div>