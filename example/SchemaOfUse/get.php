<?php
require "vendor/autoload.php";

use App\Entity\Film;
use App\Entity\Seance;




$film->find($id);
$film->findAll();


//For a many to One relation
$film->hasMany('Seance');
$seance->belongsTo('Film');