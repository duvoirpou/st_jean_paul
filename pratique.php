<?php
// Créer la session
session_start();



/*Connexion à la base de Données*/
include('admin/connexion_base_donnee/connexion_base_donnee.php');

$requete = $bdd->prepare("SELECT activites.id, activites.titre, activites.description, activites.filename, activites.type_activite_id AS id_type_activites, type_activites.nom FROM `activites` JOIN type_activites ON activites.type_activite_id = type_activites.id WHERE type_activites.id = 3");
$requete->execute();

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="St Jean Paul II">

    <!-- ========== Page Title ========== -->
    <title>St Jean Paul II</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/LOG2.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/bootsnav.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">

</head>

<body>

    
    <?php 
        include('partials/header2.php')
    ?>

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow text-center dark bg-fixed text-light" style="background-image: url(assets/img/cathedrale.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Activité Pratique</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.php"><i class="fas fa-home"></i>Acceuil</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area full-blog blog-standard default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                <div class="blog-content col-md-10 col-md-offset-1">
                            <?php $i = 0;
                                while ($data = $requete->fetch()) {
                                $i++; 
                            ?>
                        <!-- Single Item -->
                        <div class="single-item">
                            <div class="thumb">
                                <a href="#">
                                <img src="uploads/<?php echo $data['filename'] ?>" id="photo2">
                                </a>
                            </div>
                            <div class="info">
                            <h3>
                                <h4><?php echo $data['titre'] ?></h4>
                                </h3>
                                <p><?php echo $data['description'] ?></p>

                                <a class="btn circle btn-theme border btn-md" href="activites-zone.php?id=<?php echo $data['id']?>">Lire plus</a>
                            </div>
                        </div>
                        <?php } ?>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <!-- <div class="single-item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/img/1500x700.png" alt="Thumb">
                                </a>
                            </div>
                            <div class="info">
                                <h3>
                                    <a href="#">Stimulated Cultivated Projection Possession</a>
                                </h3>
                                <p>
                                    Arranging furnished knowledge agreeable so. Fanny as smile up small. It vulgar chatty simple months turned oh at change of. Astonished set expression solicitude way admiration. 
                                </p>
                                <a class="btn circle btn-theme border btn-md" href="activites-zone.php">Lire plus</a>
                            </div>
                        </div> -->
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <!-- <div class="single-item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/img/1500x700.png" alt="Thumb">
                                </a>
                            </div>
                            <div class="info">
                                <h3>
                                    <a href="#">Difficulty On Insensible Reasonable In</a>
                                </h3>
                                <p>
                                    Arranging furnished knowledge agreeable so. Fanny as smile up small. It vulgar chatty simple months turned oh at change of. Astonished set expression solicitude way admiration. 
                                </p>
                                <a class="btn circle btn-theme border btn-md" href="activites-zone.php">Lire plus</a>
                            </div>
                        </div> -->
                        <!-- End Single Item -->
                        
                        <!-- Pagination -->
                        <div class="row">
                            <div class="col-md-12 pagi-area">
                                <nav aria-label="navigation">
                                    <ul class="pagination">
                                        <li><a href="#"><i class="fas fa-long-arrow-alt-left"></i></a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->

    <!-- Start Video BG 
    ============================================= -->
    <div class="video-bg-area text-center shadow dark text-light video-bg-live bg-fixed" style="background-image: url(assets/img/GettyImages-1081422898.jpg.jpeg);">
        <div class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=hoiGV-N-2Gs',containment:'.video-bg-live', showControls:false, autoPlay:true, zoom:0, loop:true, mute:true, startAt:5, opacity:1, quality:'default'}"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1>Nous innovons toujours des meilleurs et délicieux plats jamais vu</h1>
                    <a class="btn btn-theme effect btn-md" href="pratique.php">Contemplez</a>
                </div>
            </div>
        </div>
        <!-- Shape -->
        <div class="wavesshape">
            <img src="assets/img/shape.png" alt="Shape">
        </div>
        <!-- Shape -->
    </div>
    <!-- End Video BG -->

    <?php 
        include('partials/footer.php');
    ?>

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/equal-height.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/modernizr.custom.13711.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/YTPlayer.min.js"></script>
    <script src="assets/js/bootsnav.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>