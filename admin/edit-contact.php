<?php 
    // Créer la session
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
    
    // Vérification si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // var_dump($_POST["nom"]); die();
        // Récupération des données du formulaire
        $nom = $_POST["nom"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $message = $_POST["message"];
        $erreurs = [];

        $request = $bdd->query("UPDATE `contact` SET `nom`='$nom',`email`='$email', `phone`='$phone', `message`='$message' WHERE id='$id'");
        // var_dump($request); die();

        header('location:contact.php');
    }

    $requete = $bdd->prepare("SELECT * FROM `contact` WHERE id = $id");
            $requete->execute();

    $data=$requete->fetch();
    
?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <email>Document</email>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  
        <div class="container-fluid">
            <?php include('./partial/menu.php'); ?>

            <h3>Modifier</h3>
        <form method="post">
            <div class="input-group">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" value="<?php echo $data['nom']; ?>" required>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" value="<?php echo $data['email']; ?>" required>
            </div>
            <div class="input-group">
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" value="<?php echo $data['phone']; ?>" required>
            </div>
            <div class="input-group">
                <label for="message">Message</label>
                <input type="text" id="message" name="message" value="<?php echo $data['message']; ?>" required>
            </div>
            <div class="input-group">
            <button type="submit" class="btn btn-primary mb-4">Ajouter</button>
            </div>
        </form>
        </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
    <script>
  $(document).ready(function () {
    $('a').on('click', function (e) {
      e.preventDefault();
      var targetUrl = $(this).attr('href');

      // Afficher la barre de progression avant le chargement de la page via Ajax
      $("#loading-bar").show();

      $.ajax({
        url: targetUrl,
        success: function (data) {
          // Insérer la réponse de la requête Ajax dans le contenu principal de votre page
          $('#content').html(data);

          // Cacher la barre de progression après le chargement de la page
          $("#loading-bar").hide();
        }
      });
    });
  });
</script>

  </body>
</html>