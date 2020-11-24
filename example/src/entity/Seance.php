<?php

class Seance {
  public $timestamps = false;
  protected $fillable = ["showtime"];
  
  public function film(){
    echo("TODO: \$this->belongsTo('Film');");
  }
}