<?php
require 'vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	$inputJSON = file_get_contents('php://input');
	// $input = json_decode($inputJSON, TRUE); //convert JSON into array
	
    $line = new KS\Line\LineNotify(getenv('TOKEN'));
    $line->send($inputJSON);
}