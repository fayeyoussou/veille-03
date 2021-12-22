<?php 
class Formation {
    private $id;
    private $nom;
    private $date;
    private $duree;
    private $lieu;
    
    public function getId(){
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }
}