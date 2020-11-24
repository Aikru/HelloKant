<?php
class Film {
  public $timestamps = false;
  protected $fillable = ["title", "release_date", "duration"]; 

  public function seances(){
    echo("TODO :  $this->hasMany('Seance'); ");
    
  }
}