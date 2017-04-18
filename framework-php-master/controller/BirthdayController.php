<?php

require(ROOT . "model/BirthdayModel.php");

function index(){
	
	$months = array("", "januari", "februari", "march","april","may","june","july","august","september","oktober","november","december");
	$birthdays = getAllBirthdays();

	render("birthday/index", array(
		"months" => $months,
		"birthdays" => $birthdays));
}

function create() {
	render("birthday/create");
}

function createSave() {
	if (!createBirthday()) {
		header('Location:' . URL . 'error/index');
		exit();
	}
	header('Location:' . URL . 'birthday/index');
}