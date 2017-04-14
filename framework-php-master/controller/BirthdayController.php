<?php

require(ROOT . "model/BirthdayModel.php");

function index(){
	
	$months = array("", "januari", "februari", "march","april","may","june","july","august","september","oktober","november","december");
	$birthdays = getAllBirthdays();

	render("birthday/index", array(
		"months" => $months,
		"birthdays" => $birthdays));
}