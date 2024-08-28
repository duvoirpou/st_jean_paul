<?php
// Créer la session
session_start();



/*Connexion à la base de Données*/
include('admin/connexion_base_donnee/connexion_base_donnee.php');
$id = $_GET['id'];

$requete = $bdd->prepare("SELECT actualites.id, actualites.titre, actualites.description, actualites.type_actualite_id, actualites.filename, type_actualites.nom FROM `actualites` JOIN type_actualites ON actualites.type_actualite_id = type_actualites.id WHERE actualites.id = $id");
$requete->execute();
$data=$requete->fetch();

// $type_id =$data["type_actualite_id"];

// $request = $bdd->prepare("SELECT actualites.id, actualites.titre, actualites.description, actualites.type_actualite_id, actualites.filename, type_actualites.nom FROM `actualites` JOIN type_actualites ON actualites.type_actualite_id = type_actualites.id WHERE type_actualites.id = $type_id");
// $request->execute();
// $rows=$request->fetch();
//var_dump($rows); die();
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
                    <h1>Actualités zone</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.php"><i class="fas fa-home"></i>Acceuil</a></li>
                        <li><a href="#">Blog</a></li>
                        <li class="active">Single</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area single full-blog left-sidebar default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="blog-content col-md-8">
                        
                        <!-- Item -->
                        <div class="single-item">
                            <!-- Thumb -->
                            <div class="thumb">
                            <img src="uploads/<?php echo $data['filename']; ?>"alt="Thumb">
                            </div>
                            <!-- End Thumb -->

                            <div class="info">
                                <h3><?php echo $data['titre']; ?></h3>

                                <p>
                                <?php echo $data['description']; ?>
                                </p>
                            </div>
                        </div>
                        <!-- End Item -->

                        <!-- Star Single Bottom -->
                        <div class="post-common">
                            
                            <!-- Start Post Pagination -->
                            <!-- <div class="post-pagi-area">
                                <a href="#"><i class="fas fa-angle-double-left"></i> Previus Post</a>
                                <a href="#">Next Post <i class="fas fa-angle-double-right"></i></a>
                            </div> -->
                            <!-- End Post Pagination -->

                            
                            <!-- End Post Tags -->

                            <!-- Start Author Post -->
                            <div class="author-bio">
                                <div class="avatar">
                                    <img src="assets/img/800x800.png" alt="Author">
                                </div>
                                <div class="content">
                                    <p>
                                        Supply as so period it enough income he genius. Themselves acceptance bed sympathize get dissimilar way admiration son. Design for are edward regret met lovers. This are calm case roof and. 

                                    </p>
                                    <h4> - Jonkey Rotham</h4>
                                </div>
                            </div>
                            <!-- End Author Post -->

                            <!-- Start Comments Form -->
                            <div class="comments-area">
                                <div class="comments-title">
                                    <h4>
                                        commentaire
                                    </h4>
                                    <div class="comments-list">
                                        <div class="commen-item">
                                            <div class="avatar">
                                                <img src="assets/img/800x800.png" alt="Author">
                                            </div>
                                            <div class="content">
                                                <h5>Jonathom Doe</h5>
                                                <div class="comments-info">
                                                    <p>July 15, 2018</p> <a href="#"><i class="fa fa-reply"></i>Reply</a>
                                                </div>
                                                <p>
                                                    Delivered ye sportsmen zealously arranging frankness estimable as. Nay any article enabled musical shyness yet sixteen yet blushes. Entire its the did figure wonder off. 
                                                </p>
                                            </div>
                                        </div>
                                        <div class="commen-item reply">
                                            <div class="avatar">
                                                <img src="assets/img/800x800.png" alt="Author">
                                            </div>
                                            <div class="content">
                                                <h5>Spark Lee</h5>
                                                <div class="comments-info">
                                                    <p>July 15, 2018</p> <a href="#"><i class="fa fa-reply"></i>Reply</a>
                                                </div>
                                                <p>
                                                    Delivered ye sportsmen zealously arranging frankness estimable as. Nay any article enabled musical shyness yet sixteen yet blushes. Entire its the did figure wonder off. 
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Comments Form -->
                        </div>
                        <!-- End Single Bottom -->
                    </div>

                    <!-- Start Sidebar -->
                    <div class="sidebar col-md-4">
                        <aside>
                            <!-- <div class="sidebar-item search">
                                <div class="title">
                                    <h4>Search</h4>
                                </div>
                                <div class="sidebar-info">
                                    <form>
                                        <input type="text" class="form-control">
                                        <input type="submit" value="search">
                                    </form>
                                </div>
                            </div> -->
                            <div class="sidebar-item category">
                                <div class="title">
                                    <h4>categorie d'actualité</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        <li>
                                            <a href="scolaire.php">Scolaire <span>5</span></a>
                                        </li>
                                        <li>
                                            <a href="culturelle.php">Culturelle <span>5</span></a>
                                        </li>
                                        <li>
                                            <a href="pratique.php">Pratique <span>5</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="sidebar-item gallery">
                                <div class="title">
                                    <h4>Gallery</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/Nouveau projet (18).jpg" alt="thumb">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/Nouveau projet (11).jpg" alt="thumb">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/Nouveau projet (26).jpg" alt="thumb">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/Nouveau projet (24).jpg" alt="thumb">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/Nouveau projet (9).jpg" alt="thumb">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/Nouveau projet (19).jpg" alt="thumb">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            <div class="sidebar-item social-sidebar">
                                <div class="title">
                                    <h4>follow us</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        <li class="facebook">
                                            <a href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-item tags">
                                <div class="title">
                                    <h4>Rétro</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        <li><a href="realisation.php">Réalisation</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <!-- End Start Sidebar -->
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