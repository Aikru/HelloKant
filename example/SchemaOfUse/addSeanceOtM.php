<?php 
require "vendor/autoload.php";

use App\Entity\Seance;

$seance = new Seance();
$seance->film_id = $argv[1];
$seance->showtime = $argv[2];

$seance->save();