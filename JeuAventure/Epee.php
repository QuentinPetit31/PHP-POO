<?php
require_once 'InterfaceArme.php';

class Epee implements InterfaceArme {
    private int $durabilite;

    public function __construct(int $durabilite) {
        $this->durabilite = $durabilite;
    }

    public function attaquer(): int {
        if (rand(1, 100) <= 10) {
            $this->durabilite--;
        }
        if ($this->durabilite <= 0) {
            echo "L'épée s'est brisée !<br>";
            return 0;
        }
        return rand(10, 20);
    }

    public function afficher(): void {
        echo "Arme : Épée, Durabilité : {$this->durabilite}<br>";
    }
}
?>
