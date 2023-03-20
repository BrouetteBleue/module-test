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

    // getters
    public function getEmail() {
        return $this->email;
    }
    public function getNom() {
        return $this->nom;
    }
    public function getPrenom() {
        return $this->prenom;
    }
    public function getAge() {
        return $this->age;
    }

    // setters
    public function setEmail($email) {
        $this->email = $email;
    }
    public function setNom($nom) {
        $this->nom = $nom;
    }
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }
    public function setAge($age) {
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