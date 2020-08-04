<?php

?>

<html>
    <head>
        <meta charset="utf-8">
        <link rel="icon" type="icon/ico" href="logo.ico">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <title>Rising Agency</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="css/all.min.css" rel="stylesheet">

        <script>
            $(document).ready(function() {
                $('.js-scrollTo').on('click', function() { // Au clic sur un élément
                    var page = $(this).attr('href'); // Page cible
                    var speed = 750; // Durée de l'animation (en ms)
                    $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
                    return false;
                });
            });
        </script>

    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#"><img id="bran" src="images/logo.png" alt="Rising Agency" width="150"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample07">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <img id="log" src="images/logo.png" alt="Rising Agency" width="150">
                        </li>
                    </ul>
                    <div class="form-inline my-2 my-md-0">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link js-scrollTo" href="index.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scrollTo" href="#services">Notre Concept</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scrollTo" href="#team">Notre Equipe</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scrollTo" href="#contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar -->

        <!-- Jumbotron Header -->
        <div class="jumb_top" id="home">
            <center>
                <div class="jumbotron">
                    <h2 class="display-5">CONSULTANT ET ENTREPRENEUR EN E-COMMERCE</h2>
                    <p class="lead">Augmenter son portefeuille client et son flux d'activités n'a jamais été aussi à portée de main que maintenant.</p>
                    <a class="btn btn-primary btn-lg js-scrollTo" href="#cont_after" role="button"><i class="far fa-calendar-check"></i>&nbsp;&nbsp;&nbsp;Réserver un entretien stratégique</a>
                </div>
            </center>
        </div>
        <!-- Jumbotron Header -->

        <!-- Description Rising -->
        <div class="services" id="services">
            <div class="container" id="cont_top">
                <img src="images/logo.png" alt="Rising Agency" width="330">
                <p>
                    Afin de faire passer votre business à l'étape supérieure, l'équipe de Rising Agency propose une méthode d'évolution de votre flux de clients.</br></br>
                    En se servant de nombreux outils tels que <b>Google Ads</b>, <b>Facebook Ads</b> ou encore la méthode du <b>tunnel de vente</b>, nos experts vous aiderons à mettre en place des stratégies marketing publicitaires afin d'accroitre votre portefeuille client.
                </p>
            </div>
            <!-- Description Rising -->

            <!-- Services -->
            <div class="container" id="cont_mid">
                <h1>Pourquoi nous choisir ?</h1>
                <p>L'équipe de Rising Agency est composée d'expert spécialisé dans de nombreux domaines qui vous permettront d'accroître votre flux de clients à l'aide d'outils maîtrisés. </p><br>
                <hr class="my-4">
                <div class="row">
                    <div class="col-md-4 item">
                        <img src="images/adwords-3.png" width="70">
                        <h2>Google Ads</h2>
                        <p>Nous mettons en place vos publicités optimisées sur le moteur de recherche n°1 afin de vendre vos produits/services de manière organique.</p>
                    </div>
                    <div class="col-md-4 item">
                        <img src="images/social-media-marketing-3.png" width="70">
                        <h2>Facebook Ads</h2>
                        <p>Nous mettons en place vos publicités optimisées pour convertir sur Facebook en parlant au bon public ET avec le bon message.</p>
                    </div>
                    <div class="col-md-4 item">
                        <img src="images/funnel-3.png" width="70">
                        <h2>Tunnel de vente</h2>
                        <p>Nous créons et mettons en place votre tunnel de vente automatisé afin de vendre vos produits/services en automatique</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services -->

        <!-- Calendrier -->
        <div id="cont_after">
            <div class="container">
                    <!-- Début de widget en ligne Calendly -->
                    <div class="calendly-inline-widget" data-url="https://calendly.com/rising-agency/15min?"></div>
                    <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script></br>
                    <!-- Fin de widget en ligne Calendly -->
            </div>
        </div>
        <!-- Calendrier -->

        <!-- Equipe -->
        <div class="team" id="team">
            <h1>L'équipe Rising</h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 item">
                        <img src="images/diadie.png" width="120">
                        <h2>Sidibe Diadie</h2>
                        <hr class="my-4">
                        <p>Fondateur Rising Agency</p>
                        <p>Expert E-Commerce</p><br>
                        <a href="mailto:contact@rising-agency.com"><i class="fas fa-at"></i></a>
                    </div>
                    <div class="col-md-4 item">
                        <img src="images/amine.png" width="120">
                        <h2>Soufi Amine</h2>
                        <hr class="my-4">
                        <p>Développeur Web et Mobile</p>
                        <p>Expert SEO</p><br>
                        <a href="mailto:contact@rising-agency.com"><i class="fas fa-at"></i></a>
                    </div>
                    <div class="col-md-4 item">
                        <img src="images/amel.png" width="120">
                        <h2>Hafid Amel</h2>
                        <hr class="my-4">
                        <p>Relation client</p>
                        <p>Expert Marketing</p><br>
                        <a href="mailto:contact@rising-agency.com"><i class="fas fa-at"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Equipe -->

        <!-- Contact -->
        <div id="contact" class="contact">
            <h1 style="text-align: center" >Contacte-nous</h1>
            <div class="containerr">
                <form id="contacte" action="" method="post">
                    <h3>Une question ?</h3>
                    <h4>Remplis ce formulaire </h4>
                    <fieldset>
                        <input placeholder="Entrez votre nom" type="text" name="name" tabindex="1" required>
                    </fieldset>
                    <fieldset>
                        <input placeholder="Entre votre adresse mail" type="email" name="email" tabindex="2" required>
                    </fieldset>
                    <fieldset>
                        <input placeholder="Entrez le sujet" type="text" tabindex="3" name="subject" required>
                    </fieldset>
                    <fieldset>
                        <textarea placeholder="Entrez votre message" tabindex="5" name="message" required></textarea>
                    </fieldset>
                    <fieldset>
                        <button name="submit" class="btn" type="submit"  style="background-color: #1084e2;" id="contact-submit" data-submit="...Sending"><i class="far fa-envelope"></i>
                        </button>
                    </fieldset>
                    <span >
		    		<a style="color: #61abd3;" href="https://www.linkedin.com/in/diadie-sidibe?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BnwYyFX%2BEQgCHptNnSOa%2BrQ%3D%3D"><i class="fab fa-linkedin"></i></a>
					<a  style="color: blue;"href="https://www.facebook.com/diadie.sidibe.5203"><i class="fab fa-facebook-square"></i></a>
					<a  href="https://www.instagram.com/diadiesd/"><i class="fab fa-instagram"></i></a>
				</span>
                </form>
            </div>
        </div>

        <footer class="page-footer" style="margin-top: 94px;position: absolute;bottom: 0; width: 100%;">
            <div class="text-center foot">© 2020 Rising Agency -&nbsp;&nbsp;
                <a href="mentions-legales.php"> Mentions Légales</a>
            </div>
        </footer>
        <!-- Contact -->
    </body>
</html>
