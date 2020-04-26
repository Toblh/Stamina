<?php
#Markus

//Bruker include for å hente funksjonen for å se om bruker er logget inn 
include 'include/functions.php';
include "BytteSpråk.php";
session_start();

//Bruker funskjonen for å sjekke om bruker er logget inn
isLoggedIn();

//Tilkobling
connect();
?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Home Page</title>
	<link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Didact Gothic' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/8ea1e6e22d.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="./Style/home.css">	
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
        <ul class="nav-links"> 
            <li><a href="index.php"><i class="fas fa-home"></i><?php echo $lang['home'] ?></a></li>
            <li><a href="home.php"><i class="fas fa-user-circle"></i><?php echo $lang['my account'] ?></a></li>
			<li><a href="tools.php"><i class="fas fa-calculator"></i><?php echo $lang['calculator'] ?></a></li>
			<li><a href="logout.php"><i class="fas fa-sign-out-alt"></i><?php echo $lang['logout'] ?></a></li>
        </ul>
<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn"><?php echo $lang['language'] ?> <i class="arrow-down"></i></button>
  <div id="myDropdown" class="dropdown-content">
    <a href="home.php?lang=en"><?php echo $lang['lang_en'] ?></a>
    <a href="home.php?lang=no"><?php echo $lang['lang_no'] ?></a>
  </div>
</div>
    
</nav>

<div class="grid-container">
	<div class="grid2">
	<div id="txtHint">
        <h3>Her kan du finne forskjellige øvelser...</h3>
	</div>
    <form class="grid3" action="">
        <select name="excercise" id="" onchange="showEx(this.value)">
            <option value="">Velg en øvelse:</option>
            <option value="Chest">Bryst</option>
            <option value="Back">Rygg</option>
            <option value="Legs">Bein</option>
            <option value="Shoulders">Skuldre</option>
            <option value="Biceps">Biceps</option>
            <option value="Triceps">Triceps</option>
            <option value="Calves">Legger</option>
            <option value="Glutes">Rumpe</option>
        </select>
    </form>
	</div>

	<div class="grid1">	
		<h1>Brukernavn: <?=$_SESSION['name']?></h1>
	<?php
	updateWeight();
	profileImg();
	getProfImg();
	getWeight();
	?>
	<!--Style som du vil, men ikke endre klassenavn elns, da det er viktig i fht funksjonene i php-->
	<form action="" method="POST">
	<div>
		<input type="text" name="update_weight" id="update_weight" placeholder="Oppdater vekt her: ">
		<br>
		<input type="submit" name="update" id="" value="Oppdater">
	</div>	
	</form>	
	
	<form method="POST" enctype="multipart/form-data">
	<label class="file_upd"> Last opp bilde
		<input type="file" name="image" accept="image/*" required id="image" class="file_btn">
	</label>
		<input type="submit" name="insert" id="insert" class="btn btn-primary" value="Oppdater bilde">
	</form>

	
<script src="./scripts/app.js"></script>

</div>



<script>
//Markus
//Ajax eksempel på å liste ut forskjellige treningsøvelser
function showEx(str) {
			if (str == "") {
				document.getElementById("txtHint").innerHTML = "";
				return;
			} else {
				if (window.XMLHttpRequest) {
					xmlhttp = new XMLHttpRequest();
				} else {
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						document.getElementById("txtHint").innerHTML = this.responseText;
					}
				};
				xmlhttp.open("GET","get.php?q="+str,true);
				xmlhttp.send();
			}
	}
</script>



<footer class="footer">Stamina, 2020 - USN &copy;  
    <div class="footer-social-links">
        <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="#" title="Snapchat" target="_blank"><i class="fa fa-snapchat"></i></a>
        <a href="#" title="LinkedIn+" target="_blank"><i class="fa fa-linkedin"></i></a>
        <a href="#" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a>
    </div>
</footer>


</div>

<script src="./scripts/app.js"></script>
<script src="./scripts/DropdownButton.js"></script>
</body>
</html>