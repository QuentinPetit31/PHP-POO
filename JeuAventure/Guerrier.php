<?php

class Guerrier extends AbstractPersonnage {
    public function afficher() {
        echo "Je suis un guerrier nommé {$this->nom}.<br>";
        echo "<img src='Garen.gif' alt='Attaque de Garen' style='width:400px ;'>";

    }
}
?>
