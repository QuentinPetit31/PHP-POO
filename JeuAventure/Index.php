<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
require_once 'AbstractPersonnage.php';
include 'Epee.php';
include 'Arc.php';
include 'ProjectileMagique.php';
include 'Guerrier.php';
include 'Magicien.php';
include 'Voleur.php';


// Création des armes
$epee = new Epee(5);
$arc = new Arc(3);
$projectile = new ProjectileMagique();

// Création des personnages
$guerrier = new Guerrier("Garen", $epee, "Guerrier");
$magicien = new Magicien("Lux", $projectile, 3);
$voleur = new Voleur("Graves", $arc, "Voleur");

// Affichage et attaques
$guerrier->afficher();
$guerrier->attaquer();

$magicien->afficher();
$magicien->attaquer();
$magicien->attaquer();
$magicien->attaquer();
$magicien->attaquer(); 


$voleur->afficher();
$voleur->attaquer();
?>
</body>