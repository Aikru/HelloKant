<?php

namespace HelloKant;

use HelloKant\Database;

class Model extends Database
    { 
        
    
        public function save()
        {   var_dump($this); // Test with "php example/SchemaOfUse/createFilm.php" commande line
                            // If the resulte is null it's normal
            if($this->issetTable()) //table exist in db
                {
                    if($this->issetEntity()) // entity exist in database : update
                        {$this->update();}
                  
                        else // : create
                        {$this->create();}
                }
                        
        //TODO: ELSE => Message d'erreur "la table existe pas"
    }

    
    
    private function create()
    {
        $query = "INSERT INTO " .$this->gettable() . " (" . $this->getFieldsName() . ") VALUES(" . $this->getValues() . ")";
    
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
     public function getAll()
        {
        }
    
        public function getById()
        {
        
        }


    private function issetTable()
    { 
        $query = "SELECT 1 FROM " . $this->gettable() . " LIMIT 1";
        return $this->db()->query($query);
    }

    private function issetEntity()
    {
        $query = $this->db()->prepare("SELECT id FROM " . $this->gettable() . " WHERE id = ?");
        $query->execute([$this->id]);
        return $query->rowCount();
    }

    private function getFieldsName()
    {  //TODO: querry to generate fieldname 
        //$properties = get_object_vars($this);    
        //unset($properties['fieldsTypes']);
        //    return $properties;
    
    }
    
    private function getValues()
    {  //TODO:  generate value of fieldname
        $properties = get_object_vars($this);    
        unset($properties['fieldsTypes']);
            return $properties;
    
    }

    private function gettable()
    {
            return strtolower(get_class($this)) . 's' ;

    }

}