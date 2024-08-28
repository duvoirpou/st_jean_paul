<?php
include ('connexion_base_donnee/connexion_base_donnee.php');
if (isset($_POST['ajouter'])) {
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $type_activite_id = $_POST['type_activite_id'];
    //var_dump($type_activite_id); die();

    // ... le code pour valider et télécharger l'image ...
    $targetDirectory = "../uploads/"; // Répertoire de destination où l'image sera enregistrée
    $targetFile = $targetDirectory . time() . "_" . basename($_FILES["file"]["name"]);
    //var_dump($targetFile); die();
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
            $sql = "INSERT INTO `activites`(`titre`, `description`, `type_activite_id`, `filename`) VALUES ('$titre','$description','$type_activite_id', '$filename')";
            $save_product = $bdd->query($sql);
            header('location:activites.php');

        } else {
            echo "Une erreur s'est produite lors du téléchargement de votre fichier.";
            header('location:ajout.php');
        }
    }


    // $sql = $bdd->query("INSERT INTO `products`(`categorie_id`, `title`, `price`, `description`, `filename`) VALUES ('$categorie_id','$title','$price','$description','$filename')");
}


$requete = $bdd->prepare("SELECT * FROM `activites` WHERE 1");
$requete->execute();

$types = $bdd->prepare("SELECT * FROM `type_activites` WHERE 1");
$types->execute();

$bdd = connexion_base_donnee();
?>

<div class="container-fluid">
    <?php include ('./partial/menu.php'); ?>
</div <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="style1.css">
        
</head>

<body class="bg1">



    <!-- Dans votre fichier de mise en page ou de vue -->
    <div id="loading-bar"></div>

    <!-- Afficher le message de succès ou d'erreur -->
    <h1>
        <?php
        if (!empty($_SESSION['success'])) {
            echo $_SESSION['success'];
        } elseif (!empty($_SESSION['error'])) {
            $_SESSION['error'];
        }
        ?>
    </h1>

    <div class="container mt-5">

       
                 <div class="bg7"><h3>Ajouter un utilisateur</h3></div>

        <div class="bg2">

                <form method="post" enctype="multipart/form-data">
                    <br>
                    <div class="input-group">
                        <div class="bg3"><label for="titre"><b>Titre</b></label></div>
                        <input type="text" class="bg31" id="titre" name="titre" required>
                    </div>
                    <br>
                    <div class="input-group">
                        <div class="bg4"><label for="description"><b>Description</b></label></div>
                        <textarea name="description" id="" cols="30" rows="10" required></textarea>
                    </div>
                    <br>
                    <div class="input-group">
                        <div class="bg0"><label for="filename"><b>Filename</b></label></div>
                        <input type="file" id="filename" name="file" required>
                    </div>
                    <br>
                    <div class="input-group">
                        <div class="bg5"><select required name="type_activite_id" id="type_activite_id">
                            <option value=""></option>
                            <?php
                            $i = 0;
                            while ($data = $types->fetch()) {
                                $i++;
                                ?>
                                <option value="<?php echo $data['id'] ?>">
                                    <?php echo $data['nom'] ?>
                                </option>
                            <?php } ?>
                            </select>
                        </div>

                        
                    </div>

                    <div class="bg6">
                        <button type="submit" name="ajouter" class="btn btn-secondary mb-4">Ajouter</button></a>
                    </div>
                </form>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>


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