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
        <link href="css/pricelist-basic2.css" rel="stylesheet">
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
                    <ul class="navbar-nav navbar-right bottom-align">
                        <li class="nav-item">
                            <a class="nav-link" href="introdution.php">Introduction</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dance Shows</a>
                            <div class="dropdown-menu f-menu">
                                <a class="dropdown-item" href="danceshows.php">About Dance Shows</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="dance-tailormade.php">Tailor Made Dance</a>
                                <a class="dropdown-item" href="dance-fullnight.php">Full Night Shows</a>
                                <a class="dropdown-item" href="dance-coworking.php">Co-Working Shows</a>
                                <a class="dropdown-item" href="dance-premium.php">Premium Dance Shows</a>
                                <a class="dropdown-item" href="dance-basic.php">Basic Dance Shows</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Video Projection Solutions</a>
                            <div class="dropdown-menu f-menu">
                                <a class="dropdown-item" href="videoprojection.php">About Video Projections</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="projection-building.php">Building Mapping</a>
                                <a class="dropdown-item" href="projection-car.php">Car Projection</a>
                                <a class="dropdown-item" href="projection-stage.php">Stage Decor</a>
                                <a class="dropdown-item active" href="projection-games.php">Interactive Games</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="free100.php">100% Freelusion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="artworks.php">Animation Artworks</a>
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
                    <h1 class="h1-shows">Interactive Games</h1>
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
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="https://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>

    </html>
