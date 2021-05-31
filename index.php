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
        <br>Und Abeite zurzeit als Website Developer bei der Pypeware GmBH.</h4><br><br>
    <a target="_blank" href="https://www.get-in-it.de/profil/mmW9dgUZMaHJMsNoVERlURwfpVqwtT4F" class="button"><strong>GetinIT Profil</strong></a>
</div>
<br><br>
<div class="container" id="kontakt">
    <h2 class="mb50 mt50"><span>Nehmen Sie Kontakt auf</span></h2>
    <?php

    $empfaenger = 'shaun.luedeke5520@gmail.com'; // deine-adresse@gmx.de kann es auch sein!

    $submitted=false;

    $name="";
    $email="";
    $telefon="";
    $betreff="";
    $text="";

    if(isset($_POST['abschicken'])){
        empty($_POST['name']) ? $err[] = '<li>- den Namen angeben</li>' : $name=$_POST['name'];
        empty($_POST['email']) ? $err[] = '<li>- die Email-Adresse angeben</li>' : $email=$_POST['email'];
        empty($_POST['betreff']) ? $err[] = '<li>- welche Betreff haben Sie? Bitte den Text eingeben</li>' : $betreff=$_POST['betreff'];
        empty($_POST['text']) ? $err[] = '<li>- welchen Wunsch haben Sie? Bitte den Text eingeben</li>' :$text=$_POST['text'];
        empty($_POST['telefon']) ? "" : $telefon = $_POST['telefon'];
        ('4' != $_POST['contact_antispam'] && $_POST['contact_antispam'] != 'vier') ? $err[] = '<li>- falscher Sicherheitscode</li>' : '';

        if(!empty($err)) {
            echo '<div class="alert alert-danger">Bitte korrigieren Sie folgende Fehler:<br>
            <ul class="list-unstyled content-list text-danger">';
            foreach($err as $fehler){
                echo $fehler;
            }
            echo '</ul></div>';
        } else {
            $absender = $_POST['email'];
            $mail_header = "From: Kontakt ChaosSchwein <".$absender.">\r\n";
            $mail_header .= "Reply-To: Kontakt ChaosSchwein <".$absender.">\r\n";
            $mail_header .= "X-Sender-IP: ".$_SERVER['REMOTE_ADDR']."\r\n";
            $mail_header .= "MIME-Version: 1.0\r\n";
            $mail_header .= "Content-Type: text/html; charset=UTF-8;\r\n";

            $mailnachricht = '<html><body>';
            foreach ($_POST as $feld => $wert) {
                if($feld!="abschicken" && $feld!="contact_antispam") {
                    $mailnachricht.=ucfirst($feld).": <br>".preg_replace("/(content-type:|bcc:|cc:|to:|from:)/im", "",$wert)."<br><br>";
                }
            }
            $email = preg_replace("/[^a-z0-9 !?:;,.\/_\-=+@#$&\*\(\)]/im", "", $_POST['email']);
            $email = preg_replace("/(content-type:|bcc:|cc:|to:|from:)/im", "", $email);
            $mailnachricht.="\nDatum/Zeit: ".date("d.m.Y H:i:s");
            $mailnachricht.= '</body></html>';
            mail($empfaenger, "Kontaktformular domain.de", $mailnachricht,$mail_header);
            echo '<div class="alert alert-success">Vielen Dank für Ihre eMail!<br><br>Wir werden schnellstmöglich diese bearbeiten.</div>';
            $submitted = true;
        }
    }

    if($submitted != true){ ?>
        <form role="form" class="well" method="post">
            <br><div class="form-group">
                <label>Name / Vorname*</label>
                <input class="form-control" type="text" name="name" value="<?php echo $name; ?>">
            </div><br>
            <div class="form-group">
                <label>Email*</label>
                <input class="form-control" type="email" name="email" value="<?php echo $email; ?>">
            </div><br>
            <div class="form-group">
                <label>Telefon</label>
                <input class="form-control" type="text" name="telefon" value="<?php echo $telefon; ?>">
            </div><br>
            <div class="form-group">
                <label>Betreff*</label>
                <input class="form-control" type="text" name="betreff" value="<?php echo $betreff; ?>">
            </div><br>
            <div class="form-group">
                <label>Ihre Mitteilung*</label>
                <textarea class="form-control" rows="5" name="text"><?php echo $text ?></textarea>
            </div><br>
            <div class="form-group">
                <label>Spamschutz*: wie viele Beine hat ein Stuhl?</label>
                <input class="form-control" type="text" value="" name="contact_antispam">
            </div>
            <br>
            <button type="submit" name="abschicken" class="btn btn-success btn-block"><i class="fa fa-envelope"></i> Nachricht absenden</button>
        </form>
        <br><br>
    <?php	} ?>
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