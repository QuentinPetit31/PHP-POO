<?php
class Maison{
    //Attribut
    private ?string $nom;
    private ?int $longueur;
    private ?int $largeur;
    private ?int $nbrEtage;

    //Constructeur
    public function __construct(string $nom,?int $longueur, ?int $largeur, ?int $nbrEtage){
        $this-> nom = $nom;
        $this-> longueur = $longueur;
        $this-> largeur = $largeur;
        $this-> nbrEtage = $nbrEtage;

    }
    //GETTER ET SETTER
    public function getMaison(): ?string {
        return $this->nom;
    }

    public function getLongueur(): ?int {
        return $this->longueur;
    }

    public function getLargeur(): ?int {
        return $this->largeur;
    }

    public function getEtage(): ?int {
        return $this->nbrEtage;
    }

    public function setMaison(): ?string {
        return $this->nom;
    }

    public function setLongueur(): ?int {
        return $this->longueur;
    }

    public function setLargeur(): ?int {
        return $this->largeur;
    }

    public function setEtage(): ?int {
        return $this->nbrEtage;
    }


    // Méthode pour calculer la surface
    public function surface(): int {
        return $this->longueur * $this->largeur * $this->nbrEtage;
    }

    // Getter pour récupérer le nom
    public function getNom(): string {
        return $this->nom;
    }
}