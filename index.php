<?php
require('assets/web.php')
?>
<!doctype html>
<html lang="en">
<head>
    <script src="assets/title.js" ></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" href="assets/fonts/css/all.css">
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <title>Home | ChaosSchwein</title>
    <style>

        a:hover {
            color: #6441a5;
        }
    </style>

</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-dark nav">
    <div class="container">
        <a class="navbar-brand logo-text" href="#"><h3><strong>ChaosSchwein</strong></h3></a>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fad fa-home"></i> <strong>HOME</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" target="_blank" href="https://www.twitch.tv/chaosschwein1"><i class="fab fa-twitch"></i> <strong>TWITCH</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" target="_blank" href="https://www.youtube.com/channel/UCJ6wJFxGnxysMk_gQHuzLgg"><i class="fab fa-youtube"></i> <strong>YOUTUBE</strong></a>
            </li>
			<li class="nav-item">
                <a class="nav-link" target="_blank" href="https://github.com/ChaosSchwein1"><i class="fab fa-github"></i> <strong>GITHUB</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about"><i class="far fa-user"></i> <strong>ABOUT ME</strong></a>
            </li>
        </ul>
    </div>
</nav>
<!-- Navbar -->

<!-- Background -->
<img class="bg" src="assets/img/bg.png">
<!-- Background -->

<!-- Box -->
<div class="box">
    <div class="box-img">
        <div class="box-text"><a target="_blank" href="https://www.twitch.tv/chaosschwein1">LIVE CODING</a></div>
    </div>
</div>
<!-- Box -->
<div class="about" id="about">
<h2>About Me</h2>
    <h4>Hallo mein Name ist Shaun und bin 18 Jahre alt.<br>Ich Programmiere seit ich 7 Jahren.<br>Ich habe bei einer Firma (MainTale-Studio) früher als Head-Developer geabeitet.
        <br>Und Abeite zurzeit als Website Developer bei der Pypeware GmBH.</h4>
</div>
<!-- Footer -->
<?php Web::top(); ?>
<div class="footer">
    <br>
    <p>Copyright &copy <script>document.write(new Date().getFullYear())</script> <a href="https://chaosschwein.de">ChaosSchwein.de</a> All Rights Reserved.</p>
</div>

<!-- Footer -->

</body>
</html>