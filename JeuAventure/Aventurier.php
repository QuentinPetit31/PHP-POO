<?php

require_once 'Arme.php';

abstract class AbstractPersonnage {
    protected string $nom;
    protected InterfaceArme $arme;
    protected string $type;

    public function __construct(string $nom, InterfaceArme $arme, string $type) {
        $this->nom = $nom;
        $this->arme = $arme;
        $this->type = $type;
    }



    abstract public function afficher();

}
?>