<h1>Items</h1>
<table>
	<tr>
		<th>ID</th><th>Description</th><th>Shopable</th><th>Unique</th><th>Party ID</th>
	</tr>
	<?php foreach($Items as $Item): ?>
		<tr>
			<td><?php echo $Item->getId() ?></td>
			<td><?php echo $Item->getDescription() ?></td>
			<td><?php echo $Item->getShopable() ?></td>
			<td><?php echo $Item->getUniqueItem() ?></td>
			<td><?php echo $Item->getPartyId() ?></td>
		</tr>
	<?php endforeach; ?>
</table>