<?php
use Entity\Film;

$film = new Film();
$film->title = $argv[1];
$film->duration = $argv[2];
$film->release_date = $argv[3];

$film->save();