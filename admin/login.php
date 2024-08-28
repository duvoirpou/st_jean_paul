<?php
// Créer la session
session_start();

include('connexion_base_donnee/connexion_base_donnee.php');


if (isset($_POST['envoyer'])) {
    // var_dump($_POST);exit;

    if (!empty($_POST['email']) and !empty($_POST['password'])) {

        $email    = htmlentities(trim($_POST['email']));
        $password        = htmlentities(trim($_POST['password']));


        // Requête pour vérifier l'existence de l'utilisateur
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = $bdd->query($sql);

        // Vérifier si l'utilisateur existe dans la base de données
        if ($result->rowCount() > 0) {
            // Authentification réussie
            $row = $result->fetch(PDO::FETCH_ASSOC);
            $utilisateur_nom = $row['nom'];
            $utilisateur_email = $row['email'];
            $utilisateur_id = $row['id'];
            //echo "Authentification réussie pour l'utilisateur avec l'adresse e-mail : " . $utilisateur_email;

            //ajout des sessions
            $_SESSION['id']    = $utilisateur_id;
            $_SESSION['nom'] = $utilisateur_nom;
            $_SESSION['email'] = $utilisateur_email;
            $_SESSION['password'] = $reponse->password;

            $_SESSION['success'] = "Authentification réussie pour l'utilisateur avec l'adresse e-mail : " . $utilisateur_email;

            header('location:index.php');
        } else {


            header('location:login.php');
        }

        // Fermer la connexion à la base de données
        $bdd = null;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/styleAdmin.css">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
    <link rel="stylesheet" href="style1.css">
</head>

<body id="body">
    <div class="container-login">
        <form method="post">
            <h2>Connexion</h2>
            <div class="input-group">
                <label for="email">Adresse e-mail</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group">
                <!-- <button type="submit" name="envoyer" class="btn">Se connecter</button> -->
                <input type="submit" name="envoyer" class="btn" value="Se connecter">
            </div>
        </form>
    </div>
</body>

</html>
