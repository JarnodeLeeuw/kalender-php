<div class="container">
	<h1>Edit</h1>
	<form action="<?= URL ?>Calendar/editSave" method="post">
	
		<input type="text" name="person" value="<?= $birthdays['birthdays_person']; ?>">
		<input type="text" name="day" value="<?= $birthdays['birthdays_day']; ?>">
		<input type="text" name="day" value="<?= $birthdays['birthdays_month']; ?>">
		<input type="text" name="day" value="<?= $birthdays['birthdays_year']; ?>">
		<input type="hidden" name="id" value="<?= $birthdays['birthdays_id']; ?>">
		<input type="submit" value="Verzenden">
	
	</form>

</div>
