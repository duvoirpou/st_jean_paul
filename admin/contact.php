<?php 
include('connexion_base_donnee/connexion_base_donnee.php');

if(isset($_POST['submit'])) {
    $titre = $_POST['nom'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `contact`(`nom`, `email`, `phone`, `message`) VALUES ('$nom','$email', '$phone', '$message')";

    $result = mysqli_query($conn, $sql);
    
}

$requete = $bdd->prepare("SELECT * FROM `contact` WHERE 1");
$requete->execute();

?>





<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  
        <div class="container-fluid">
            <?php include('./partial/menu.php'); ?>
        </div>

        <div class="row mt-5">
        <div class="col">
                <div>
                    <a href="ajout-contact.php"><i class="fa fa-edit"></i> <buttontype="submit" class="btn btn-primary mb-4">Ajouter</button>
                </div>
                
        <table class="table table-hover table-dark">
        <thead>
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Message</th>
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
                        <td><?php echo $data['nom'] ?></td>
                        <td><?php echo $data['email'] ?></td>
                        <td><?php echo $data['phone'] ?></td>
                        <td><?php echo $data['message'] ?></td>
                        
                        <td>
                            <a href="edit-contact.php?id=<?php echo $data['id'] ?>"><i class="fa fa-edit"></i> <button>Modifier</button>
                            </a> &nbsp;
                                <a href="delete-contact.php?id=<?php echo $data['id'] ?>" onclick="return confirm('Confirmer la suppression ?');"> <button>
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