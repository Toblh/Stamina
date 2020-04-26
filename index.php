<?php
include "BytteSpråk.php";

// Kontaktskjema skrevet av: Tobias
if(!empty($_POST["submit"])) {
    $recipient="tobiashusebye@gmail.com";
    $subject="Form to email message";
    $Navn=$_POST["Navn"];
    $Email=$_POST["Email"];
    $Melding=$_POST["Melding"];

    $mailBody="Navn: $Navn\nEmail: $Email\n\n$Melding";

    mail($recipient, $subject, $mailBody, "From:" . $Navn . "<" . $Email . ">");

}
    $Takk="<p>Takk! Din melding er sendt.</p>";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./Style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Didact Gothic' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/8ea1e6e22d.js" crossorigin="anonymous"></script>
    <title><?php echo $lang['title'] ?></title>
</head>

<body>
    <nav class=bg-img>
        <!--- Dette er navbaren som vises i mobil format -->
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <!--- Dette er navbaren som vises i Stor skjerm format -->
        <ul id="nav-links"> 
            <li><a href="../index.php"><i class="fas fa-home"></i><?php echo $lang['home'] ?></a></li>
            <li><a href="#About"><i class="fas fa-info"></i><?php echo $lang['about'] ?></a></li>
            <li><a href="#Contact"><i class="fas fa-envelope"></i><?php echo $lang['contact'] ?></a> </li>
            <li><a href="home.php"><i class="fas fa-user-circle"></i><?php echo $lang['my account'] ?></a></li>
            
            <!-- Dropdown knapp -->
            <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn"><?php echo $lang['language'] ?> <i class="arrow-down"></i></button>
  <!-- Det som er inni dropdown knappen --->
  <div id="myDropdown" class="dropdown-content">
    <a href="index.php?lang=en"><?php echo $lang['lang_en'] ?></a>
    <a href="index.php?lang=no"><?php echo $lang['lang_no'] ?></a>
  </div>
        </ul>

</div>
    <h1 class="forTekst"><img src="../Bilder/15.png" alt="logo" style="width:500px; height:200px;"></h1>
    <p class="underTekst"><?php echo $lang['undertitle']?></p>
</nav>  

<h1 id="About"><?php echo $lang['titletwo'] ?></h1>

// Kort skrevet av: Tobias
<div class="cards-list">
    
    <div class="card1">
        <div class="card_image"> 
            <img src="../Bilder/11.jpg"/>
        </div>
        <div class="card_title">
            <p>Tobias Larsen</p>
            <div class="card-social">
                <a href="https://www.facebook.com/Tobiaslarsenhusebye/" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://www.instagram.com/toblh/" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/tobias-larsen-431016190/" title="LinkedIn+" target="_blank"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
    </div>
    <div class="card2">
        <div class="card_image"> 
        <img src="../Bilder/12.jpg"/>
        </div>
        <div class="card_title">
            <p>Markus Lippestad</p>
            <div class="card-social">
                <a href="https://www.facebook.com/markus.lippestad" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://www.instagram.com/markuslippestad/" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/markus-lippestad-39577011b/" title="LinkedIn+" target="_blank"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
    </div>
    <div class="card3">
        <div class="card_image">
        <img src="../Bilder/13.jpg"/> 
    </div>
        <div class="card_title">
            <p>Sondre Berg</p>
            <div class="card-social">
                <a href="https://www.facebook.com/sondre.berg.92" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://www.instagram.com/xxshreddermanxx/" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/sondre-berg-434162150/" title="LinkedIn+" target="_blank"><i class="fa fa-linkedin"></i></a>
            </div>  
        </div>
    </div>
</div>

    
// Kontaktskjema html skrevet av: Tobias
<div>
        <h1 id="Contact"><?php echo $lang['contact us'] ?></h1>
        <!--- Kontaktskjema -->
        <form class="my-form" method="POST" action="index.php">
            <div class="container">
            <h1 class="skjematekst">Spørsmål? Vennligst bruk kontaktskjema..</h1>
            <ul>
                <li>
                 <div class="grid grid-2">
                    <input type="text" name="Navn" placeholder="Navn" required>
                    <input type="text" placeholder="Brukernavn" required>
                 </div>
                </li>
                <li>
                 <div class="grid grid-2">
                    <input type="text" name="Email" placeholder="E-mail" required>
                    <input type="text" placeholder="Tlf" required>
                 </div>
                </li>
                <li>
                <textarea name="Melding" placeholder="Melding"></textarea>
                </li>
                <li>
                <div class="grid grid-3">
                    <div class="required-msg"></div>
                    <input type="submit" name="submit" value="SUBMIT">
                    </div>
                </div>
                </li>
            </ul>
            </div>
        </form>
    </div>
</div>

// Footer laget av: Tobias
<footer class="footer">Stamina, 2020 - USN &copy;  
    <div class="footer-social-links">
        <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="#" title="Snapchat" target="_blank"><i class="fa fa-snapchat"></i></a>
        <a href="#" title="LinkedIn+" target="_blank"><i class="fa fa-linkedin"></i></a>
        <a href="#" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a>
    </div>
</footer>

<script src="./scripts/app.js"></script>

</body>
</html>
