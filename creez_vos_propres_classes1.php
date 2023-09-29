<?php

declare(strict_types=1);    // Mode strict

class  Pont    // Création de la classe Pont
{
    public float $longueur = 0;
    public float $largeur = 0;

    public function getSurface(): float    // Méthode calculant la surface
    {
        return $this->longueur * $this->largeur;    // Retourne la surface
    }
}



$pont = new Pont;    // Création d'un objet de la classe Pont

$pont->longueur = 286.0;    // Initialisation de la propriété longueur
$pont->largeur = 15.0;    // Initialisation de la propriété largeur


$surface = $pont->getSurface();    // Calcul de la surface

var_dump($surface);    // Affichage de l'objet
?>

