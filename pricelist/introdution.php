<?php
//Lapvédelem
session_start();
if (!isset($_SESSION['belepett'])) {
	header("Location: index.php");
	exit();
}	
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="keywords" content="Freelusion, Video Mapping Studio, Dance Company, Show Factory, Visual Studio">
        <meta name="description" content="Freelusion, Video Mapping Studio, Dance Company, Show Factory, Visual Studio">
        <title>Introduton | FREELUSION Price List</title>
        <style>
            html,
            body {
                height: 100%;
                overflow: hidden;
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
            }

            .hatter {
                background-image: url("img/intro-bg.jpg");
            }

        </style>
    </head>

    <body class="hatter">
        <div class="tokkozepre">

        </div>
    </body>

    </html>
