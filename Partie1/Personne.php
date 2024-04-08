<?php


class Personne {

    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;
    private int $age;

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
        return $this->today=time("2024-04-08");
    }

    public function setToday (string $today)
    {
        $this ->today=$today;
    } 

    public function getAge () 
    {
        $this -> $age = $today -> diff($this->dateNaissance);
    }
}

