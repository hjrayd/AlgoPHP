<?php


class Personne {

    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;

    public function __construct(string $nom, string $prenom, string $dateNaissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = new DateTime($dateNaissance);
    }

    public function getNom ():string 
     {
        return $this->nom;
    }

    public function setNom (string $nom) 
    {
        $this ->nom = $nom;
    }

    public function getPrenom ():string 
     {
        return $this->prenom;
    }

    public function setPrenom (string $prenom) 
    {
        $this ->prenom = $prenom;
    }

    public function getDateNaissance ():DateTime
     {
        return $this->dateNaissance;
    }

    public function setDateNaissance (string $dateNaissance)
     {
        $this ->dateNaissance = $dateNaissance;
    } 

    public function getToday ():DateTime
    {
        return $this->today;
    }

    public function setToday (string $today)
    {
        $this ->today=$today;
    } 

    public function getAge () 
    { 
        $today = new DateTime();
        $age = $today -> diff($this->dateNaissance);
        return $age->y;
    }

    public function setAge (int $age)
    {

    $this -> age=$age;

    }
}

