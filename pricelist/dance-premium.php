<?php
//Lapvédelem
session_start();
if (!isset($_SESSION['belepett'])) {
	header("Location: index.php");
	exit();
}	
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="Freelusion, Video Mapping Studio, Dance Company, Show Factory, Visual Studio">
        <meta name="description" content="Freelusion, Video Mapping Studio, Dance Company, Show Factory, Visual Studio">
        <meta name="author" content="Nyolczas István">
        <link rel="icon" type="image/png" href="img/freelusion-icon.png">

        <title>Dance Shows | FREELUSION Price List</title>
        <!--   ================================ css reset ================================ -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css">
        <!--   ================================ Bootstrap styles ================================ -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <!--   ================================ social media ================================ -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--   ================================ My styles ================================ -->
        <link href="css/pricelist-basic.css" rel="stylesheet">
        <link href="css/pricelist-cards.css" rel="stylesheet">
    </head>

    <body>
        <!-- navbar -->
        <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark navbar-fixed-top navbar-center">
            <div class="container">
                <a class="navbar-brand" href="#">
                <img class="navlogo" alt="Freelusion logo" src="img/freelusion-logo-white.png">
            </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#pricelistNavbar" aria-controls="pricelistNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="pricelistNavbar">
                    <ul class="navbar-nav navbar-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">DANCE SHOWS</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="introdution.php">Introducion</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item active" href="danceshows.php">Dance Shows</a>
                                <a class="dropdown-item" href="videoprojection.php">Video Projection Solutions</a>
                                <a class="dropdown-item" href="free100.php">100% Freelusion</a>
                                <a class="dropdown-item" href="artworks.php">Animation Artworks</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Premium Dance Shows</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="danceshows.php">About Dance Shows</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="dance-tailormade.php">Tailor Made Dance</a>
                                <a class="dropdown-item" href="dance-fullnight.php">Full Night Shows</a>
                                <a class="dropdown-item" href="dance-coworking.php">Co-Working Shows</a>
                                <a class="dropdown-item active" href="dance-premium.php">Premium Dance Shows</a>
                                <a class="dropdown-item" href="dance-basic.php">Basic Dance Shows</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- /.navbar -->
        <main>
            <div class="container">
                <!-- Az oldal tartalma -->
                <div class="jumbotron jumbotron-shows">
                    <h1 class="h1-shows">Premium Dance Shows</h1>
                    <div class="row row-shows">
                        <div class="col-md-6 col-lg-4 col-xl-4">
                            <div class="flip" id="flip1">
                                <div id="video1" class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/J7ENd8i9Bi4" frameborder="0" allowfullscreen></iframe>
                                </div>
                                <img id="image1" class="img-responsive" src="img\premium_1_adameve.jpg" alt="Adam and Eve">
                                <h2 class="cim" id="cim1"> <span class="light">AGT 2015 </span> ADAM & EVE <span class="light"> PROJECTION DANCE</span> </h2>
                            </div>
                            <div class="panel" id="panel1">
                                <div class="card-txt">
                                    <small class="descript">
                                            This unique performance was the base of our America’s Got Talent success in 2015 which put Freelusion into the Semi-finals
                                            and an invitation as a special guest performance in the Finals.
                                        </small>
                                    <p class="specifi">
                                        Length:
                                        <strong>5 minutes</strong>
                                        <br> Crew:
                                        <strong>3 dancers,
                                                <br> 1 manager, 1 technician, 1 assistant</strong>
                                        <br> Special offer:
                                        <strong>the same AGT TV show dancers for an extra 4.000 EUR</strong>
                                    </p>
                                    <h3 class="price">13.750 €</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4">
                            <div class="flip" id="flip2">
                                <div id="video2" class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/mnxQcax-kKU" frameborder="0" allowfullscreen></iframe>
                                </div>
                                <img id="image2" class="img-responsive" src="img\premium_2_cube.jpg" alt="2013 GOT TALENT PACKAGE CUBE SHOWS">
                                <h2 class="cim" id="cim2"> <span class="light">2013 GOT TALENT PACKAGE</span> CUBE SHOWS </h2>
                            </div>
                            <div class="panel" id="panel2">
                                <div class="card-txt">
                                    <small class="descript">
                                            A premium selection of the best Got Talent performances, including the various dancer shows with the Cubes.
                                        </small>
                                    <p class="specifi">
                                        Length:
                                        <strong>15 or 25 minutes</strong>
                                        <br> Crew:
                                        <strong>4 dancers,
                                                <br> 1 manager, 1 technician, 1 assistant</strong>
                                    </p>
                                    <div class="doubleprice">
                                        <h3 class="price">11.550 €</h3>
                                        <p class="price">(15 minutes)</p>
                                    </div>
                                    <div class="doubleprice">
                                        <h3 class="price">27.500 €</h3>
                                        <p class="price">(25 minutes)</p>
                                    </div>
                                    <div class="doubleprice-after"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4">
                            <div class="flip" id="flip3">
                                <div id="video3" class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vsbcHjI6TSo" frameborder="0" allowfullscreen></iframe>
                                </div>
                                <img id="image3" class="img-responsive" src="img\premium_3_science.jpg" alt="FREELUSION SCIENCE SHOW">
                                <h2 class="cim" id="cim3"> FREELUSION SCIENCE SHOW </h2>
                            </div>
                            <div class="panel" id="panel3">
                                <div class="card-txt">
                                    <small class="descript">
                                            Professional on-stage technology focused performance with large staff suitable for big sized screens and stages based on
                                            fully detailed graphic content with interactive dance.
                                        </small>
                                    <p class="specifi">
                                        Length:
                                        <strong>15-25 minutes</strong>
                                        <br> Crew:
                                        <strong>10 dancers,
                                                <br> 1 manager, 1 technician, 1 assistant</strong>
                                    </p>
                                    <h3 class="price">27.500 €</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 col-xl-4">
                            <div class="flip" id="flip4">
                                <div id="video4" class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ptRATwM1qFw" frameborder="0" allowfullscreen></iframe>
                                </div>
                                <img id="image4" class="img-responsive" src="img\premium_4_butterfly.jpg" alt="BUTTERFLY">
                                <h2 class="cim" id="cim4"> BUTTERFLY </h2>
                            </div>
                            <div class="panel" id="panel4">
                                <div class="card-txt">
                                    <small class="descript">
                                            Amazing interactive audiovisual experience performed by one singer, mixed with dress and stage mapping.
                                        </small>
                                    <p class="specifi">
                                        Length:
                                        <strong>5 minutes</strong>
                                        <br> Crew:
                                        <strong>1 singer,
                                                <br> 1 technician, 1 assistant</strong>
                                    </p>
                                    <h3 class="price">11.550 €</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4">
                            <div class="flip" id="flip5">
                                <div id="video5" class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/FVSrzcfiQVo" frameborder="0" allowfullscreen></iframe>
                                </div>
                                <img id="image5" class="img-responsive" src="img\premium_5_martial.jpg" alt="MARTIAL ARTS SHOW">
                                <h2 class="cim" id="cim5"> MARTIAL ARTS SHOW </h2>
                            </div>
                            <div class="panel" id="panel5">
                                <div class="card-txt">
                                    <small class="descript">
                                            Adventures of the master martial artist. Coreographed fighting show where the hero has the ability to control the four basic
                                            elements: fire, water, earth and wind.
                                        </small>
                                    <p class="specifi">
                                        Length:
                                        <strong>5 minutes</strong>
                                        <br> Crew:
                                        <strong>1 dancer,
                                                <br> 1 technician, 1 assistant</strong>
                                    </p>
                                    <h3 class="price">5.400 €</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 col-xl-4">
                            <div class="flip" id="flip6">
                                <div id="video6" class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/p6A6mM-fYuQ" frameborder="0" allowfullscreen></iframe>
                                </div>
                                <img id="image6" class="img-responsive" src="img\premium_6_strings.jpg" alt="STRINGS & KEYS">
                                <h2 class="cim" id="cim6"> STRINGS & KEYS </h2>
                            </div>
                            <div class="panel" id="panel6">
                                <div class="card-txt">
                                    <small class="descript">
                                            Nine classical music pieces played on piano and harp. The projected animations are sound reactive to create an immersive
                                            audiovisual performance.
                                        </small>
                                    <p class="specifi">
                                        Length:
                                        <strong>45 minutes</strong>
                                        <br> Crew:
                                        <strong>2 musicians,
                                                <br> 1 manager, 1 technician, 1 assistant</strong>
                                    </p>
                                    <h3 class="price">27.500 €</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4">
                            <div class="flip" id="flip7">
                                <div id="video7" class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/g1XMz7d-hVA" frameborder="0" allowfullscreen></iframe>
                                </div>
                                <img id="image7" class="img-responsive" src="img\premium_7_bigscreen.jpg" alt="BIG SCREEN">
                                <h2 class="cim" id="cim7"> BIG SCREEN </h2>
                            </div>
                            <div class="panel" id="panel7">
                                <div class="card-txt">
                                    <small class="descript">
                                            The popular 3D projection dance show with cubes designed for big size stages and screens. There are options for 6 or 9 dancers
                                            package.
                                        </small>
                                    <p class="specifi">
                                        Length:
                                        <strong>5 minutes</strong>
                                        <br> Crew:
                                        <strong>6 or 9 dancers,
                                                <br> 1 manager,
                                                <br> 1 technician, 1 assistant</strong>
                                    </p>
                                    <div class="doubleprice">
                                        <h3 class="price">11.550 €</h3>
                                        <p class="price">(6 dancers)</p>
                                    </div>
                                    <div class="doubleprice">
                                        <h3 class="price">14.850 €</h3>
                                        <p class="price">(9 dancers)</p>
                                    </div>
                                    <div class="doubleprice-after"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4">
                            <div class="clearfix">
                                <p>
                                    <a class="btn btn-primary clearfix" data-toggle="collapse" href="#supernaturalShow" aria-expanded="false" aria-controls="supernaturalShow">
                                    <img class="img-responsive btnImage" src="img\premium_8_supernatural.jpg" alt="Adam and Eve">SUPERNATURAL
                                </a>
                                </p>
                                <div class="collapse clearfix" id="supernaturalShow">
                                    <div class="card card-body">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/l3hHuzGrC54" frameborder="0" allowfullscreen></iframe>
                                        </div>
                                        <div class="card-txt">
                                            <small class="descript">
                                            The most spectacular Cinderella story told by live interactive projection dance on stage, based on Freelusion’s popular FakeOff
                                            Talent Show performance, broadcasted on TRU TV in the US.
                                        </small>
                                            <p class="specifi">
                                                Length:
                                                <strong>8 minutes</strong>
                                                <br> Crew:
                                                <strong>4 dancers,
                                                <br> 1 manager, 1 technician, 1 assistant</strong>
                                            </p>
                                            <h3 class="price">11.040 €</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4">

                            <div class="clearfix">
                                <p>
                                    <a class="btn btn-primary clearfix" data-toggle="collapse" href="#supernazuralSinger" aria-expanded="false" aria-controls="supernazuralSinger">
                                    <img class="img-responsive btnImage" src="img\premium_9_supernatsing.jpg" alt="Adam and Eve">SUPERNATURAL WITH SINGER INTRO
                                </a>
                                </p>
                                <div class="collapse clearfix" id="supernazuralSinger">
                                    <div class="card card-body">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Nt33-Y99e-0" frameborder="0" allowfullscreen></iframe>
                                        </div>
                                        <div class="card-txt">
                                            <small class="descript">
                                            The most spectacular Cinderella story told by live interactive projection dance on stage, based on Freelusion’s popular FakeOff
                                            Talent Show performance, broadcasted on TRU TV in the US.
                                        </small>
                                            <p class="specifi">
                                                Length:
                                                <strong>12 minutes</strong>
                                                <br> Crew:
                                                <strong>1 singer, 4 dancers,
                                                <br> 1 manager, 1 technician, 1 assistant</strong>
                                            </p>
                                            <h3 class="price">14.410 €</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Az oldal tartalma -->
            </div>
            <!-- /.container -->
        </main>

        <!-- footer -->
        <footer class="footer bg-dark">
            <div class="container">
                <address class="footerline">
                <p>
                    <a class="adresslink" href="mailto:info@freelusion.com"> info@freelusion.com</a>
                    <span class="glyphicons glyphicons-phone"></span>
                    <a class="adresslink" href="tel:+36203677783">
                        +36 20 367 7783
                    </a>
                    <a class="adresslink" href="http://freelusion.com/">www.freelusion.com </a>
                </p>
            </address>
                <div class="footerline">
                    <a href="https://www.facebook.com/freelusion/" target="_blank" class="fa fa-facebook"></a>
                    <a href="https://www.youtube.com/user/Freelusion" target="_blank" class="fa fa-youtube"></a>
                    <a href="https://www.instagram.com/freelusion/" target="_blank" class="fa fa-instagram"></a>
                </div>
                <div class="footerline">
                    <p>&copy
                        <span id="year"></span> - FREELUSION
                    </p>
                </div>
            </div>
        </footer>

        <!-- ==================================================  -->
        <!-- MyScript -->
        <script>
            document.getElementById("year").innerHTML = new Date().getFullYear();

        </script>
        <!--   ================================ Bootstrap sripts ================================ -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <!--   ================================ JQuery sripts ================================ -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">


        </script>
        <!--   ================================ My sripts ================================ -->
        <script src="js/card.js"></script>
    </body>

    </html>
