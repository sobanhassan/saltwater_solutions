<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsiveNavBar.css">
    <title>Salt Water Solutions | <?php echo $title?></title>
</head>

<body>
    <header>
        <nav class="navbar hide">
            <div class="navcontent">
                <!--Burger Menu for Mobile, resize the screen to see it works-->
                <div class="burger navbar-toggle" id="js-navbar-toggle">
                    <div class="l1"></div>
                    <div class="l2"></div>
                    <div class="l3"></div>
                </div>

                <!--This where the nav bar menu list is -->
                <ul class="mainnav list-style-remove" id="menu">
                    <?php include'nav.html'?>
                </ul>
            </div>
        </nav>
        <div class="banner">
            <img src="images/banner.jpg" alt="">
        </div>
    </header>