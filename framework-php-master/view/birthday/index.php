
<table>
	<tr>
		<th>#</th>
		<th>Name</th>
		<th colspan="2">Actions</th>
	</tr>
	<?php foreach ($birthdays as $birthday) { ?>
	<tr>
		<td><?=$birthday['id']; ?></td>
		<td><?=$birthday['person']; ?></td>
		<td><a href="=URL . 'birthday/edit' . #birthday['id']">Edit</a></td>
		<td><a href="=URL . 'birthday/delete' . #birthday['id']">Delete</a></td>
	</tr>

	<?php } ?>
</table>

<form>
	<input type="text" name="birthday" placeholder="birthday name..">
</form>