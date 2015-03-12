FOREACH (QUESTS)
<div class="row">
	<div class="col-md-12 border">LOCATION</div>
</div>
	FOREACH (QUESTS @ LOCATION)
	<div class="row">
		<div class="col-md-12 shadow border">
			<div class="row">
				<div class="col-md-9 border">
					<div class="row">
						<div class="col-md-6">NAME</div>
						<div class="col-md-4">ITEMS</div>
						<div class="col-md-2">XP</div>
					</div>
					<div class="row">
						<div class="col-md-6"></div>
						<div class="col-md-4">MONSTER</div>
						<div class="col-md-2">STAT-ICONS</div>
					</div>
					<div class="row">
						<div class="col-md-12 shadow">BESCHREIBUNG</div>
					</div>
				</div>
				<div class="col-md-3 border">
					<div class="col-md-12">
						<input type="button" value="BEGINNEN"/>
					</div>
				</div>
			</div>
		</div>
	</div>
	ENDFOREACH
ENDFOREACH