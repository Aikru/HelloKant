<?php
require "vendor/autoload.php";

use App\Entity\Film;



$seance = new Film();
$seance->delete($id);