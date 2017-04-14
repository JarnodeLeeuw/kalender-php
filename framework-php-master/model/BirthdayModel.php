<?php

function getAllBirthdays()
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM birthdays";
	$query = $db->prepare($sql);				

	$query->execute();
	
	$db = null;						

	return $query->fetchAll();

}

