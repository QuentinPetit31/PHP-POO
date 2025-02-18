<?php
require_once 'InterfaceArme.php';


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

    public function attaquer() {
        if ($this->arme instanceof ProjectileMagique) {
            if ($this instanceof Magicien) {
                $this->arme->attaquer();
            } else {
                echo "{$this->nom} ne peut pas utiliser le Projectile Magique !<br>";
            }
        } else {
            echo "{$this->nom} attaque avec " . get_class($this->arme) . " et inflige " . $this->arme->attaquer() . " points de dégâts.<br>";
        }
    }
}
?>
