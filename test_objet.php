<?php
include './maison.php';

$LaMaisonetteLZ = new Maison("LaMaisonetteLZ", 100, 80, 125);

// Calcul et affichage de la surface
echo "<p>La surface de " . $LaMaisonetteLZ->getNom() . " est égale à : " . $LaMaisonetteLZ->surface() . " m²</p>";
