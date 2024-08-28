<?php
/*Connexion à la base de Données*/
function connexion_base_donnee()
{
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=st-jean-paul-ii;charset=utf8', 'root', '');
        return $bdd;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

$bdd = connexion_base_donnee();

?>