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

<div class="logo"><img src="img/Banner.png "/></div>
<div class="Time"><div id="dataLayer">
    </div></div>
<div class="nav">
    <ul>
        <li><a class="menu" href="index.html">Strona główna</a></li>
        <li><a class="menu" href="omnie.html">O mnie</a></li>
        <li><a class="menu" href="wpisy.html">Wpisy</a></li>
        <li><a class="menu active" href="#">Kontakt</a></li>
    </ul></div>

<div class="content">
    <p>Niżej możecie za pomocą formularza skontaktować się ze mną. Zazwyczaj odpowiadam w ciągu 24 godzin.</p>
    <hr><hr><br>
    <?php
    //jeżeli zmienna "email" została wypełniona, wysyłamy wiadomość
    if (isset($_REQUEST['email']))  {

        //Informację o emailu, na który będzie wysyłana wiadomość
        $admin_email = "michajelonek@gmail.com";
        $email = $_REQUEST['email'];
        $subject = $_REQUEST['subject'];
        $comment = $_REQUEST['comment'];

        //wysyłamy email
        mail($admin_email, "$subject", $comment, "From:" . $email);

        //komunikat potwierdzający
        echo "Dziękujemy za kontakt z nami!";
    }

    //jeżeli zmienna z wartością "email" nie została wypełniona pokazujemy ponownie formularz
    else  {
        ?>

        <form method="post" enctype="text/plain">
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