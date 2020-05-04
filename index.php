<?php
session_start();

require __DIR__ . '/vendor/autoload.php';
include "Models/Student.php";

$Controllers = !empty($_GET['Controllers']) ? $_GET["Controllers"] : null;
if ($Controllers != "")
	$Controllers = "Controllers/Controller_$Controllers.php";
else
	$Controllers = "Controllers/layout.php";
include "Views/layout.php";
	// $homeCtrl = new Student;
	// print_r($homeCtrl->list());
