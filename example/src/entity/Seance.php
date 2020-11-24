<?php

namespace Entity\Seance;
use HelloKant\Repository;


class Seance {
  public $timestamps = false;
  protected $fillable = ["showtime"];
  
  public function film(){
    echo("TODO: \$this->belongsTo('Film');");
  }
}