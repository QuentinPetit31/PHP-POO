<?php
require_once 'InterfaceArme.php';

class ProjectileMagique implements InterfaceArme {
    public function attaquer(): int {
        return rand(15, 25);
    }

    public function afficher(): void {
        echo "Arme : Projectile Magique<br>";
        echo "<img src='lux.gif' alt='Attaque de Lux' style='width:200px;'>";

    }
}
?>
