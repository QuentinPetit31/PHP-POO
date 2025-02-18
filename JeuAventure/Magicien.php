<?php

class Magicien extends AbstractPersonnage {
    private int $mana;

    public function __construct(string $nom, InterfaceArme $arme, int $mana) {
        parent::__construct($nom, $arme, "Magicien");
        $this->mana = $mana;
    }

    public function attaquer() {
        if ($this->arme instanceof ProjectileMagique) {
            if ($this->mana > 0) {
                $this->mana--;
                echo "{$this->nom} utilise un Projectile Magique ! Mana restant : {$this->mana}<br>";
                $this->arme->attaquer();

                if ($this->mana <= 0) {
                    echo "{$this->nom} tombe inconscient !<br>";
                }
            } else {
                echo "{$this->nom} n'a plus de mana !<br>";
            }
        } else {
            parent::attaquer();
        }
    }
    public function afficher() {
        echo "Je suis un magicien nommé {$this->nom}. Mana : {$this->mana}<br>";
        echo "<img src='lux.gif' alt='Attaque de Lux' style='width:200px ;'>";

    }
}
?>
