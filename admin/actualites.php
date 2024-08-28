<?php 
include('connexion_base_donnee/connexion_base_donnee.php');

if(isset($_POST['submit'])) {
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $type_actualite = $_POST['type_actualite_id'];
    $filename = $_POST['filename'];

    

    $sql = "INSERT INTO `actualites`(`titre`, `description`,`type_actualite`, `filename`) VALUES ('$titre','$description', '$type_actualite', '$filename')";

    $result = mysqli_query($conn, $sql);
    
}

$requete = $bdd->prepare("SELECT actualites.id, actualites.titre, actualites.description, type_actualites.nom, actualites.filename FROM `actualites` JOIN type_actualites ON actualites.type_actualite_id = type_actualites.id WHERE 1");
$requete->execute();


?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">

  </head>
  <body class="couleur1">
  
        <div class="container-fluid">
            <?php include('./partial/menu.php'); ?>
        </div>
        <br>
        <div class="row mt-5">
        <div class="col">
                <div>
                    <a href="ajout-actualites.php"><i class="fa fa-edit"></i> <buttontype="submit" class="btn btn-primary mb-4"><b>Ajouter</b></button>
                </div>
                
        <table class="table table-hover table-dark">
        <thead>
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Description</th>
                    <th scope="col">Type</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 0;
                        while ($data = $requete->fetch()) {
                        $i++; 
                    ?>
                    <tr>
                        <td> <?php echo $data['id'] ?></td>
                        <td><?php echo $data['titre'] ?></td>
                        <td><?php echo $data['description'] ?></td>
                        <td><?php echo $data['nom'] ?></td>
                        <td>
                            <img src="../uploads/<?php echo $data['filename'] ?>" style="width: 100px; height: 100px;" alt="">
                        </td>
                        
                        <td>
                            <a href="edit-actualites.php?id=<?php echo $data['id'] ?>"><i class="fa fa-edit"></i> <button>Modifier</button>
                            </a> &nbsp;
                                <a href="delete-actualites.php?id=<?php echo $data['id'] ?>" onclick="return confirm('Confirmer la suppression ?');"> <button>
                                    supprimer
                                </button>
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
        </table>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
