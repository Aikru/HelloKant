<?php

namespace App\Entity;
use HelloKant\Model;


class Seance extends Model  {
  public $timestamps = false;
  protected $fillable = ["showtime"];
  
  public function film(){

        //TODO: Create the Instance (__construct)

  }
}