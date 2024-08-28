<?php 

    session_start();

    // Empécher l'accès à cette page si la session n'existe pas
    if (empty($_SESSION['email'])) {
        header('location:login.php');
    }

/*Connexion à la base de Données*/
        function connexion_base_donnee()
        {           
            try{
                $bdd = new PDO('mysql:host=localhost;dbname=st-jean-paul-ii;charset=utf8', 'root', '');
                 return $bdd;
            }catch(Exception $e){
                die('Erreur : ' . $e->getMessage());
            }
        }  

        $bdd = connexion_base_donnee();

        $id = $_GET['id'];

        $request = $bdd->query("DELETE FROM `actualites` WHERE id = '$id'");

        header('location:actualites.php');
?>