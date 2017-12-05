<?php
session_start();

if (isset($_POST['rendben'])) {
	
	//változók tisztítása
	require("../kapcsolat.php");
	$email = mysqli_real_escape_string($dbconn, strip_tags(strtolower(trim($_POST['email']))));
	$jelszo = sha1($_POST['jelszo']);
	//változók ellenőrzése
	if (empty($email) )  {
			$hiba = '<div class="alert alert-danger" role="alert">
                    Wrong Username or Password!
                        </div>';
		}
		// Beléptetés
		else {
			$sql = "SELECT id
					FROM felhasznalok
					WHERE email = '{$email}'
					AND jelszo = '{$jelszo}'
					LIMIT 2";
			$eredmeny = mysqli_query($dbconn, $sql);
			
			//sikeres
			if (mysqli_num_rows($eredmeny) == 1) {
				$_SESSION['belepett'] = true;
				header("Location: introdution.php");
			}
			else {
				//sikertelen
				$hiba = '<div class="alert alert-danger" role="alert">
                    Wrong Username or Password!
                        </div>';
			}
		}
			
	/* $jelszo = mysqli_real_escape_string($dbconn, $jelszo) */
}

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Pricelist Sign in</title>
        <!--    Bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <!-- Custom styles for this template -->
        <link href="css/signin.css" rel="stylesheet">
    </head>

    <body class="hatter">
        <div class="container">
            <div class="logo">
                <img class="img-fluid max" src="img/freelusion-logo-glow.png" alt="freelusion-logo">
                <h1 class="display-4">OFFICIAL PRICELIST 2018</h1>
            </div>
            <form method="post" action="" class="form-signin">
                <h2 class="form-signin-heading">Please sign in</h2>
                <?php if (isset($hiba)) print $hiba; ?>
                <label for="email" class="sr-only">Username</label>
                <input type="text" id="email" name="email" class="form-control" placeholder="Username" required autofocus>
                <label for="jelszo" class="sr-only">Password</label>
                <input type="password" id="password" name="jelszo" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" id="rendben" name="rendben" type="submit">Sign in</button>
            </form>

        </div>
        <!-- /container -->
        <!--	Bootstrap-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>

    </html>
