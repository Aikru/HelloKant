<?php

namespace HelloKant;

use HelloKant\Database;

class Model extends Database
{
    public function save()
    {   if($this->issetTable()) //table exist in db
            {
                if($this->issetEntity()) // entity exist in database : update
                    {$this->update();}
                else // : create
                    {$this->insert();}
            }
                else
        return "La db n'existe pas";
    }

    
    public function delete() 
    { //TODO:
    }
    
    public function update() 
    {   //TODO:
    }


    private function issetTable()
    {
       //TODO:
    }

    private function issetEntity()
    {
          //TODO:
    }



    private function generateFieldsName()
    {  //TODO:
    }
    
    private function generateValues()
    {  //TODO:
    }


    private function insert()
    {
         //TODO:
    }  
}