
<table>
	<tr>
		<th>#</th>
		<th>Name</th>
		<th>Day</th>
		<th>Month</th>
		<th>Year</th>
		<th colspan="2">Actions</th>
	</tr>
	<?php foreach ($birthdays as $birthday) { ?>
	<tr>
		<td><?=$birthday['id']; ?></td>
		<td><?=$birthday['person']; ?></td>
		<td><?=$birthday['day']; ?></td>
		<td><?=$birthday['month']; ?></td>
		<td><?=$birthday['year']; ?></td>
		<td><a href="=URL . 'birthday/edit' . #birthday['id']">Edit</a></td>
		<td><a href="=URL . 'birthday/delete' . #birthday['id']">Delete</a></td>
	</tr>

	<?php } ?>
</table>

<form>
	<input type="text" name="person" placeholder="person name..">
	<input type="text" name="day" placeholder="day number">
	<input type="text" name="month" placeholder="month number">
	<input type="text" name="year" placeholder="year number">
</form>
