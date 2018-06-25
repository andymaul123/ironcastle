<?php

if($_POST["form-submit"]) {
    $recipient="gixoculose@nickrizos.com";
    $subject="Email to Iron Castle Games";
    $sender=$_POST["form-name"];
    $senderEmail=$_POST["form-email"];
    $message=$_POST["form-body"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p class='text'>Thank you! Your message has been sent.</p>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>

<!-- Basic Page Needs
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<meta charset="utf-8">
<title>Iron Castle Games</title>
<meta name="description" content="Iron Castle Games">
<meta name="keywords" content="HTML5, games, unity, web" />

<!-- Mobile Specific Metas
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- FONT
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />

<!-- CSS
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/skeleton.css">
<link rel="stylesheet" href="css/ironcastle.css">
<link rel="stylesheet" href="css/fonts.css">

<!-- Favicon
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<link rel="icon" type="image/png" href="favicon/favicon.ico">

</head>
<body>

<!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

<section class="section home" id="home">
    <div class="container">
        <div class="row">
            <div class="twelve columns">
                <img src="images/logo.png" class="logo" />
                <h1 class="title">Iron Castle Games</h1>
                <span class="subtitle">All good empires start with a castle</span>
            </div>
        </div>
        <div class="row">
            <div class="twelve columns">
                <nav class="navigation">
                    <a href="#home" class="nav-item">Home</a>
                    <a href="#about" class="nav-item">About Us</a>
                    <a href="#games" class="nav-item">Games</a>
                    <a href="#contact" class="nav-item">Contact Us</a>
                </nav>
            </div>
        </div>
    </div>
</section>


<section class="section about-us" id="about">
    <div class="container">
        <div class="row">
            <div class="twelve columns">
                <h2 class="title">About Us</h2>
                <span class="subtitle">Offering WebGL Games made with Unity 3D</span>
                <p class="text"><strong>Iron Castle</strong> strives to make <strong>simple, quality</strong> games for the web, because bored internet users deserve good games too. We are not above making games for other platforms though, and have plenty of past experience designing and creating titles for mobile devices.</p>
            </div>
        </div>
    </div>
</section>

<section class="section portfolio" id="games">
    <div class="container">
        <div class="row">
            <div class="twelve columns">
                <h2 class="title">Games</h2>
                <span class="subtitle">Browse our selection of WebGL games made with Unity 3D. Click on the thumbnails to view screenshots.</span>
            </div>
        </div>
        <div class="row">
            <div class="six columns">
                <div class="game-entry">
                    <a href="images/jellyPopScreen1.png" target="_blank" class="game-link">
                        <img src="images/jellyPop.png" class="img-responsive">
                    </a>
                    <h3 class="title">Jelly Pop!</h3>
                    <p class="text">A fast-paced arcade game. Click jellies to extend time and get points. <strong>5.43 MB</strong></p>
                    <a class="play-button" href="http://ironcastlegames.com/jellyPop/jellyPop.html" target="_blank">Play</a>
                </div>
            </div>
            <div class="six columns">
                <div class="game-entry">
                    <a href="images/memoryMatchScreen1.png" target="_blank" class="game-link">
                        <img src="images/memoryMatch.png" class="img-responsive">
                    </a>
                    <h3 class="title">Memory Match</h3>
                    <p class="text">A classic memory matching game. Match the animals to clear cards. <strong>5.67 MB</strong></p>
                    <a class="play-button" href="http://ironcastlegames.com/memoryMatch/memoryMatch.html" target="_blank">Play</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section contact-us" id="contact">
    <div class="container">
        <div class="row">
            <div class="twelve columns">
                <h2 class="title">Contact Us</h2>
                <p class="text">Drop us a line and we will do our best to get back to you.</p>
                <?=$thankYou ?>
                <form method="post" action="index.php" class="contact-form">
                  <div class="row">
                    <div class="six columns">
                      <label class="form-label" for="form-name">Name</label>
                      <input class="u-full-width" type="text" id="form-name" name="form-name">
                    </div>
                    <div class="six columns">
                      <label class="form-label" for="form-email">Email</label>
                      <input class="u-full-width" type="email" id="form-email" name="form-email">
                    </div>
                  </div>
                  <label class="form-label" for="form-body">Message</label>
                  <textarea class="u-full-width" id="form-body" name="form-body"></textarea>
                  <input class="button-primary" type="submit" value="Submit" name="form-submit">
                </form>
            </div>
        </div>
    </div>
</section>

<section class="section social">
    <div class="container">
        <div class="row">
            <div class="twelve columns">
                <h2 class="title">Follow Us</h2>
                <span class="subtitle">On Social Mediaaaaaa!</span>
            </div>
        </div>
        <div class="row">
            <div class="twelve columns">
                <nav class="social-media-nav">
                    <a href="https://www.facebook.com/IronCastleGames/?ref=aymt_homepage_panel" target="_blank" class="icon icon-facebook"></a>
                    <a href="https://twitter.com/IronCastleGames" target="_blank" class="icon icon-twitter"></a>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="section footer">
    <div class="container">
        <div class="row">
            <div class="twelve columns">
                <p class="text">Copyright (c) 2017 www.ironcastlegames.com. All rights reserved.</p>
            </div>
        </div>
    </div>
</section>


<!-- End Document
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
