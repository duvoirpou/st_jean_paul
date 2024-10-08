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

    <script src="https://cdn.jsdelivr.net/npm/driver.js@1.0.1/dist/driver.js.iife.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/driver.js@1.0.1/dist/driver.css" />

</head>

<body>



    <?php
    include('partials/header2.php')
        ?>

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow text-center dark bg-fixed text-light"
        style="background-image: url(assets/img/cathedrale.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Contactez nous</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Acceuil</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact 
    ============================================= -->
    <div class="contact-us-area default-padding">
        <div class="container">
            <div class="row">
                <div class="contact-box">

                    <!-- Start Form -->
                    <div class="col-md-5 form-box">
                        <div class="form-content">
                            <div class="heading">
                                <h3>Ecrivez nous</h3>
                            </div>
                            <form action="./mail/envoi_email.php" method="POST">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group">
                                            <input class="form-control" id="name" name="name" placeholder="Nom*"
                                                type="text" required>
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" id="email" name="email" placeholder="Email*"
                                                type="email" required>
                                            <span class="alert-error" id="result"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" id="phone" name="phone"
                                                placeholder="Téléphone*" type="text" required>
                                            <span class="alert-error" id="resultPhone"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" id="subject" name="subject"
                                                placeholder="Sujet*" type="text" required>
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group comments">
                                            <textarea class="form-control" id="comments" name="comments"
                                                placeholder="Message*" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <button type="submit" name="submit" id="submit">
                                            Envoyez le message <i class="fa fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- Alert Message -->
                                <div class="col-md-12 alert-notification">
                                    <div id="message" class="alert-msg"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End Form -->

                    <div class="col-md-6 col-md-offset-1 info">
                        <h2>Contactez nous</h2>
                        <p>
                            Pour toutes vos questions ou préoccupations, n'hésitez pas à nous contacter. Nous sommes
                            impatients de vous entendre et de vous aider de quelque manière que ce soit.
                        </p>
                        <div class="address-items">
                            <div class="row">
                                <!-- Item -->
                                <div class="col-md-4 col-sm-6 equal-height">
                                    <div class="item">
                                        <div class="icon"><i class="fas fa-map-marked-alt"></i></div>
                                        <span>1317 rue Nko, Plateau des 15 ans,<br> Brazzaville, Congo</span>
                                    </div>
                                </div>
                                <!-- End Item -->
                                <!-- Item -->
                                <div class="col-md-4 col-sm-6 equal-height">
                                    <div class="item">
                                        <div class="icon"><i class="fas fa-envelope-open"></i> </div>
                                        <span>info@yourdomain.com</span>
                                    </div>
                                </div>
                                <!-- End Item -->
                                <!-- Item -->
                                <div class="col-md-4 col-sm-6 equal-height">
                                    <div class="item">
                                        <div class="icon"><i class="fas fa-phone"></i></div>
                                        <span>+242 06 859 37 66<!--  <br>+99-34-8878-9989 --></span>
                                    </div>
                                </div>
                                <!-- End Item -->
                                <!-- Item -->
                                <!-- <div class="col-md-6 col-sm-6 equal-height">
                                    <div class="item">
                                        <div class="icon"><i class="fas fa-clock"></i> </div>
                                        <span>info@yourdomain.com</span>
                                    </div>
                                </div> -->
                                <!-- End Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Start Google Maps 
    ============================================= -->
    <div class="maps-area">
        <div class="container-full">
            <div class="row">
                <div class="google-maps">
                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14767.262289338461!2d70.79414485000001!3d22.284975!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1424308883981"></iframe> -->

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.805129092078!2d15.2591722!3d-4.258117200000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a6a32dc0a607419%3A0xd94fbc56f1c6736c!2s1317%20Rue%20Nko%2C%20Brazzaville!5e0!3m2!1sfr!2scg!4v1724844077837!5m2!1sfr!2scg"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- End Google Maps -->

    <!-- Start Video BG 
    ============================================= -->
    <!-- <div class="video-bg-area text-center shadow dark text-light video-bg-live bg-fixed" style="background-image: url(assets/img/GettyImages-1081422898.jpg.jpeg);">
        <div class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=hoiGV-N-2Gs',containment:'.video-bg-live', showControls:false, autoPlay:true, zoom:0, loop:true, mute:true, startAt:5, opacity:1, quality:'default'}"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1>Nous innovons toujours des meilleurs et délicieux plats jamais vu</h1>
                    <a class="btn btn-theme effect btn-md" href="pratique.php">Contemplez</a>
                </div>
            </div>
        </div>
        
        <div class="wavesshape">
            <img src="assets/img/shape.png" alt="Shape">
        </div>
        
    </div> -->
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

    <script>
        const driver = window.driver.js.driver;

        const driverObj = driver();

        const nameEl = document.getElementById("name");
        const emailEl = document.getElementById("email");
        const phoneEl = document.getElementById("phone");
        const subjectEl = document.getElementById("subject");
        const commentsEl = document.getElementById("comments");
        const formEl = document.querySelector("form");

        nameEl.addEventListener("focus", () => {
            driverObj.highlight({
                element: nameEl,
                popover: {
                    title: "Nom",
                    description: "Entrez votre nom ici",
                },
            });
        });

        emailEl.addEventListener("focus", () => {
            driverObj.highlight({
                element: emailEl,
                popover: {
                    title: "Email",
                    description: "Entrez votre email ici",
                },
            });
        });

        phoneEl.addEventListener("focus", () => {
            driverObj.highlight({
                element: phoneEl,
                popover: {
                    title: "Téléphone",
                    description: "Entrez votre téléphone ici",
                },
            });
        });

        subjectEl.addEventListener("focus", () => {
            driverObj.highlight({
                element: subjectEl,
                popover: {
                    title: "Sujet",
                    description: "Entrez le sujet ici",
                },
            });
        });

        commentsEl.addEventListener("focus", () => {
            driverObj.highlight({
                element: commentsEl,
                popover: {
                    title: "Message",
                    description: "Saisissez votre message ici",
                },
            });
        });

        formEl.addEventListener("blur", () => {
            driverObj.destroy();
        });

    /* const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    const emailInput = document.getElementById('email');

    emailInput.addEventListener('blur', function() {
        if (!emailRegex.test(emailInput.value)) {
            alert('L\'email entrée n\'est pas valide.');
        }
    }); */

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const emailInput = document.getElementById('email');

    emailInput.addEventListener('blur', function() {
        if (!emailRegex.test(emailInput.value)) {
            alert('L\'email entrée n\'est pas valide.');
        }
    });

    const validateEmail = (email) => {
        return email.match(
            /* /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/ */

            /^[^\s@]+@[^\s@]+\.[^\s@]+$/
            /* l autorise les formats suivants : 
                1.  Prettyandsimple@example.com 
                2.  very.common@example.com 
                3.  jetable.style.email.with+symbol@example.com 
                4.  autre.email-with-dash@example.com 
                9. #!$%&'*+-/=?^_`{}|  ~@exemple.org 
                6. "()[]:,;@\\\"!#$%&'*+-/=?^_`{}| ~.a"@exemple.org
                7. " "@example.org (espace entre les guillemets)
                8. üñîçøðé@example.com (caractères Unicode dans la partie locale)
                9. üñîçøðé@üñîçøðé.com (Caractères Unicode dans la partie domaine)
                10. Pelé@example.com (latin)
                11. δοκιμή@παράδειγμα.δοκιμή (grec)
                12. 我買@屋企.香港 (chinois)
                13. 甲斐@黒川.日本 (japonais)
                14. чебурашка@ящик-с-апельсинами.рф (cyrillique)    
            */
        );
    };

    const validate = () => {
        const $result = $('#result');
        const email = $('#email').val();
        $result.text('');

        if(validateEmail(email)){
            $result.text(email + ' is valid.');
            $result.css('color', 'green');
        } else{
            $result.text(email + ' is invalid.');
            $result.css('color', 'red');
        }
        return false;
    }

    $('#email').on('input', validate);

    const phoneRegex = /^[0-9\s\-\+\(\)]+$/;
    const phoneInput = document.getElementById('phone');

    phoneInput.addEventListener('blur', function() {
        if (!phoneRegex.test(phoneInput.value)) {
            alert('Le téléphone entré n\'est pas valide.');
        }
    });

    const validatePhone = (phone) => {
        return phone.match(
            /^[0-9\s\-\+\(\)]+$/
        );
    };

    const validatePhoneInput = () => {
        const $resultPhone = $('#resultPhone');
        const phone = $('#phone').val();
        $resultPhone.text('');

        if(validatePhone(phone)){
            /* $resultPhone.text(phone + ' est valide.');
            $resultPhone.css('color', 'green'); */
        } else{
            $resultPhone.text(phone + ' est invalide.');
            $resultPhone.css('color', 'red');
        }
        return false;
    }

    $('#phone').on('input', validatePhoneInput);
    </script>
</body>

</html>