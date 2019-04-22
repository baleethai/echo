<?php
require 'vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

if (isset($_GET['m']) && !empty($_GET['m'])) {
    $m = $_GET['m'];
    $line = new KS\Line\LineNotify(getenv('TOKEN'));
    $line->send($m);
}

