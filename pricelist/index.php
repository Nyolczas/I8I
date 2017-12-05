<?php
session_start();

if (isset($_POST['rendben'])) {
	
	//változók tisztítása
	require("../kapcsolat.php");
	$email = mysqli_real_escape_string($dbconn, strip_tags(strtolower(trim($_POST['email']))));
	$jelszo = sha1($_POST['jelszo']);
	//változók ellenőrzése
	if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL))  {
			$hiba = "Hibás e-mail címet, vagy jelszót adtál meg!";
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
				header("Location: lista.php");
			}
			else {
				//sikertelen
				$hiba = "Hibás e-mail címet, vagy jelszót adtál meg!";
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
        <title>Ügyfél Belépés</title>
        <link rel="stylesheet" href="css/style.css">
        <!--    Bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>

    <body>
        <h1>Belépés</h1>
        <form method="post" action="">
            <?php if (isset($hiba)) print $hiba; ?>
            <p><label for="email">E-mail:*</label><br>
                <input type="text" id="email" name="email" required></p>
            <p><label for="jelszo">Jelszó:*</label><br>
                <input type="password" id="password" name="jelszo" required></p>
            <p><em>A *-gal jelölt mezők kitöltése kötelező!</em></p>
            <input type="submit" id="rendben" name="rendben" value="Belépés">
        </form>
        <!--	Bootstrap-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>

    </html>
