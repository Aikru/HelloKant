<?php

namespace HelloKant;

use HelloKant\Database;

class Model extends Database
    { 
        public function save()
        {   
            if($this->issetTable()) //table exist in db
                {
                    if($this->issetEntity()) // entity exist in database : update
                        {$this->update();}
                  
                        else // : create
                        {$this->insert();}
                }

        //TODO: ELSE => Message d'erreur 
    }

    
    
    private function insert()
    {
        $query = "INSERT INTO " .$this->table() . " (" . $this->generateFieldsName() . ") VALUES(" . $this->generateValues() . ")";
    
        //TODO: 
    }
    
    private function delete() 
    {   $query = $this->db()->prepare("DELETE FROM " . $this->table() . " WHERE id = ?");
         //TODO:
    }
    
    private function update() 
    {   $query = "UPDATE " . $this->table() . " SET " . $fields . " WHERE id = ?";
        
        //TODO:   
     }

    
     private function FKquery()
     {
           //TODO: Make query to deal with FK
     }
 


    private function issetTable()
    {
       //TODO: querry to know if table exist
    }

    private function issetEntity()
    {
          //TODO: querry to know if entyti already exist
    }

    
    private function haveFK()
    {
          //TODO: 
    }



    private function generateFieldsName()
    {  //TODO: querry to generate fieldname 

    }
    
    private function generateValues()
    {  //TODO:  querry to generate value of fieldname

    }

    
    private function table()
    {
        //TODO: return name of the table

    }
        
    
}