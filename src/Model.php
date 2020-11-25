<?php

namespace HelloKant;

use HelloKant\Database;

class Model extends Database
    { 
        public function getAll()
        {
        }
    
        public function getById()
        {
        
        }
    
        public function save()
        {   
            if($this->issetTable()) //table exist in db
                {
                    if($this->issetEntity()) // entity exist in database : update
                        {$this->update();}
                  
                        else // : create
                        {$this->insert();}
                }

        //TODO: ELSE => Message d'erreur "ta table existe pas"
    }

    
    
    private function insert()
    {
        $query = "INSERT INTO " .$this->gettable() . " (" . $this->generateFieldsName() . ") VALUES(" . $this->generateValues() . ")";
    
        //TODO: 
    }
    
    private function delete() 
    {   $query = $this->db()->prepare("DELETE FROM " . $this->gettable() . " WHERE id = ?");
         //TODO:
    }
    
    private function update() 
    {   $fields = [];
        $query = "UPDATE " . $this->gettable() . " SET " . $fields . " WHERE id = ?";
        
        //TODO:   
     }

    
     private function FKquery()
     {
           //TODO: Make query to deal with FK
     }
 


    private function issetTable()
    { $query = "SELECT 1 FROM " . $this->gettable() . " LIMIT 1";
        return $this->db()->query($query);

    }

    private function issetEntity()
    {
        $query = $this->db()->prepare("SELECT id FROM " . $this->gettable() . " WHERE id = ?");
        $query->execute([$this->id]);
        return $query->rowCount();;
    }

    
    private function haveFK()
    {
          //TODO:  One of the value is an array ?
    }



    private function generateFieldsName()
    {  //TODO: querry to generate fieldname 

    }
    
    private function generateValues()
    {  //TODO:  generate value of fieldname

    $properties = [];
        foreach($this->properties() as $propertie)
    { 
        $properties[] = $propertie;
    }
    
            return $properties;
    
    }
    private function gettable()
    {
            return strtolower($this->get_class($this)) . 's' ;
        }
        //TODO: return name of the table

    }

}