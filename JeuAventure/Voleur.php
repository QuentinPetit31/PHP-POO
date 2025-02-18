<?php
require_once 'AbstractPersonnage.php';

class Voleur extends AbstractPersonnage {
    public function afficher() {
        echo "Je suis un voleur nommé {$this->nom}.<br>";
    }
}
?>
