<?php

class Personne
{
    private $nom;
    private $prenom;
    private $adresse;
    private $dateNaissance;

    public function __construct($nom, $prenom, $adresse, $dateNaissance)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->dateNaissance = $dateNaissance;
    }

    public function getInfo(): string
    {
        return $this->nom . ' ' . $this->prenom . ' ' . $this->adresse . ' ' . $this->dateNaissance;
    }

    public function setAdresse($adresse): void
    {
        $this->adresse = $adresse;
    }

    public function getAge(): int
    {
        $date = new DateTime($this->dateNaissance);
        $now = new DateTime();
        $interval = $now->diff($date);
        return $interval->y;
    }
}
