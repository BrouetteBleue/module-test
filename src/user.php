<?php
class User {
    
    private $email;
    private $nom;
    private $prenom;
    private $age;
    
    public function __construct($email, $nom, $prenom, $age) {
        $this->email = $email;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }
    
   public function isValid() {
        if (!$this->email || !filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        if (!$this->nom || !$this->prenom) {
            return false;
        }
        if ($this->age < 13) {
            return false;
        }
        return true;
    }
    
}