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
  try {
    $bdd = new PDO('mysql:host=localhost;dbname=st-jean-paul-ii;charset=utf8', 'root', '');
    return $bdd;
  } catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
  }
}

$bdd = connexion_base_donnee();

$id = $_GET['id'];

// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // var_dump($_POST["nom"]); die();
  // Récupération des données du formulaire
  $titre = $_POST["titre"];
  $description = $_POST["description"];
  $type_activite_id = $_POST["type_activite_id"];
  $erreurs = [];

  //$request = $bdd->query("UPDATE `actualites` SET `titre`='$titre',`description`='$description', `filename`='$filename' WHERE id='$id'");

  // ... le code pour valider et télécharger l'image ...
  $targetDirectory = "../uploads/"; // Répertoire de destination où l'image sera enregistrée
  $targetFile = $targetDirectory . time() . "_" . basename($_FILES["file"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
  
  // Vérifier si le fichier est une image réelle ou une fausse image
  if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    
    if ($check !== false) {
      echo "Le fichier est une image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "Le fichier n'est pas une image.";
      $uploadOk = 0;
    }
  }

  // Vérifier si le fichier existe déjà
  if (file_exists($targetFile)) {
    echo "Désolé, le fichier existe déjà.";
    $uploadOk = 0;
  }

  // Limiter la taille de l'image (ici, on limite à 5 Mo)
  $maxFileSize = 5 * 1024 * 1024; // 5 Mo
  if ($_FILES["file"]["size"] > $maxFileSize) {
    echo "Désolé, votre fichier est trop volumineux.";
    $uploadOk = 0;
  }

  // Autoriser uniquement certains formats d'images (vous pouvez ajouter ou supprimer des formats selon vos besoins)
  $allowedFormats = array("jpg", "jpeg", "png", "gif");
  if (!in_array($imageFileType, $allowedFormats)) {
    echo "Désolé, seuls les fichiers JPG, JPEG, PNG et GIF sont autorisés.";
    $uploadOk = 0;
  }

  if ($uploadOk == 0) {
    echo "Désolé, votre fichier n'a pas été téléchargé.";
  } else {
    // Si tout est ok, essayer d'envoyer le fichier
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
      echo "Le fichier " . htmlspecialchars(basename($_FILES["file"]["name"])) . " a été téléchargé.";

      // Enregistrement du lien de l'image dans la base de données
      $filename = $_FILES["file"]["name"];
      $filepath = $targetFile;

      // Requête SQL pour insérer les données de l'image dans la base de données
      $sql = "UPDATE `activites` SET `titre`='$titre',`description`='$description',`type_activite_id`='$type_activite_id', `filename`='$filename' WHERE id='$id'";
      $update_activite = $bdd->query($sql);
      header('location:activites.php');

    } else {
      echo "Une erreur s'est produite lors du téléchargement de votre fichier.";
      //header('location:ajout-actualites.php');
    }
  }
  // var_dump($request); die();

  header('location:activites.php');
}
    $requete = $bdd->prepare("SELECT activites.id, activites.titre, activites.description, activites.type_activite_id, activites.filename, type_activites.nom FROM `activites` JOIN type_activites ON activites.type_activite_id = type_activites.id WHERE activites.id = $id");
    $requete->execute();

    $data=$requete->fetch();

    $req = $bdd->prepare("SELECT * FROM `type_activites` WHERE 1");
    $req->execute();

    $types = $bdd->prepare("SELECT * FROM `type_activites` WHERE 1");
$types->execute();
    
?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <description>Document</description>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
  </head>
<body class="bd1">


    <div class="container-fluid">
            <?php include('./partial/menu.php'); ?>
              <br><br><br><br><br>

            <div class="bd8"><h3>Modifier</h3></div>

          <div class="bd2">
            <br>
                  <form method="post" enctype="multipart/form-data">
                      <div class="input-group">
                          <div class="bd3"><label for="titre"><b>Titre</b></label></div>
                          <input type="text" class="bd9" id="titre" name="titre" value="<?php echo $data['titre']; ?>" required>
                      </div>
                      <br>
                      <div class="input-group">
                          <div class="bd4"><label for="description"><b>Description</b></label></div>
                          <textarea name="description" id="" cols="30" rows="10" required>
                          <?php echo $data['description']; ?>
                          </textarea>
                      </div>
                      <br>
                      <div class="input-group">
                          <div class="bd5"><label for="filename"><b>Filename</b></label></div>
                          <input type="file" id="filename" name="file" required>
                      </div>
                      <br>
                      <div class="input-group">
                          <div class="bd6">
                            <select required name="type_activite_id" id="type_activite_id">
                                <option value="<?php echo $data['type_activite_id']; ?>"></option>
                                <?php
                                $i = 0;
                                while ($row = $req->fetch()) {
                                    $i++;
                                    ?>
                                    <option value="<?php echo $row['id'] ?>">
                                        <?php echo $row['nom'] ?>
                                    </option>
                                <?php } ?>
                            </select>
                          </div>
                      </div>
                      <div class="input-group">
                          <div class="bd7"><button type="submit" class="btn btn-secondary mb-4"><b>Ajouter</b></button></div>
                      </div>
                  </form>
          </div>

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