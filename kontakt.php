<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Strona projektowa</title>
    <meta name="description" content="To jest strona projektowa dla Krzyśka" />
    <meta name="keywords" content="programowanie, projekt, strona, www" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Patrick+Hand&amp;subset=latin-ext" rel="stylesheet">
    <link rel="icon" type="image/ico" sizes="16x16" href="img/code.ico">
    <script src="date.js"></script>
    <script src="jquery-3.3.1.min.js"></script>
    <script src="aktualizacja.js"></script>

</head>

<body onLoad="wyswietlDane()">

<div class="logo"><img src="img/logo.png "/></div>
<div class="Time"><div id="dataLayer">
    </div></div>
<div class="nav">
    <ul>
        <li><a class="menu" href="index.html">Strona główna</a></li>
        <li><a class="menu" href="omnie.html">O mnie</a></li>
        <li><a class="menu" href="wpisy.html">Wpisy</a></li>
        <li><a class="menu active" href="#">Kontakt</a></li>
        <li><a class="menu" href="https://www.facebook.com/profile.php?id=100002505705144"><img src="img/fb.png"/></a></li>
        <li><a class="menu" href="https://github.com/michussj07"><img src="img/github.png"/></a></li>
        <li><a class="menu" href="#"><img src="img/discord.png"/></a></li>
        <li><a class="menu" href="https://steamcommunity.com/id/Michussj07/"><img src="img/steam.png"/></a></li>
        <li><a class="menu" href="wsparcie.html">Wesprzyj mnie!!</a></li>
    </ul></div>

<div class="content">
    <p>Niżej możecie za pomocą formularza skontaktować się ze mną. Zazwyczaj odpowiadam w ciągu 24 godzin.</p>
    <hr><hr><br>
    <?php
    if (isset($_REQUEST['email']))  {

        $admin_email = "michajelonek@gmail.com";
        $email = $_REQUEST['email'];
        $subject = $_REQUEST['subject'];
        $comment = $_REQUEST['comment'];


        mail($admin_email, "$subject", $comment, "From:" . $email);


        echo "Dziękuję za kontakt ze mną. Odpowiem jak najszybciej się da!";
    }
    else  {
        ?>

        <form method="post">
            Email: <input name="email" type="email" placeholder="jankowalski@email.pl" required /><br /><br>
            Temat: <input name="subject" type="text" placeholder="Lubie kartofle" required /><br /><br>
            Wiadomość:<br />
            <textarea name="comment" rows="15" cols="40" placeholder="Przykładowy tekst"></textarea><br />
            <input type="submit" value="Wyślij" />
        </form>

        <?php
    }
    ?>


</div>
<div class="footer"><h6><SCRIPT LANGUAGE= "JavaScript" type= "text/javascript">
            ostatniaModyfikacja();
        </SCRIPT> Wykonana została za to przez Michała Jelonka ;) &copy Wszelkie prawa zastrzeżone.</h6>
</div>


</body>
</html>