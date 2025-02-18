<?php
require_once 'InterfaceArme.php';

class Arc implements InterfaceArme {
    private int $munition;

    public function __construct(int $munition) {
        $this->munition = $munition;
    }

    public function attaquer(): int {
        if ($this->munition > 0) {
            $this->munition--;
            return rand(1, 35);
        } else {
            echo "Pas de flèches restantes !<br>";
            return 0;
        }
    }

    public function afficher(): void {
        echo "Arme : Arc, Munitions restantes : {$this->munition}<br>";
    }
}
?>
