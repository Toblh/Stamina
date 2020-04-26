
<?php
include 'BytteSpråk.php';

//session_start();


?>


<!DOCTYPE html>
<html>
<head>
<head>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta http-equiv="X-UA-Compatible" content="ie=edge">
		  <title>Kalkulator</title>
		  <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    	<link href='https://fonts.googleapis.com/css?family=Didact Gothic' rel='stylesheet'>
    	<script src="https://kit.fontawesome.com/8ea1e6e22d.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="./Style/home.css">	
	</head>
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
  </ul>
<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn"><?php echo $lang['language'] ?> <i class="arrow-down"></i></button>
<div id="myDropdown" class="dropdown-content">
    <a href="index.php?lang=en"><?php echo $lang['lang_en'] ?></a>
    <a href="index.php?lang=no"><?php echo $lang['lang_no'] ?></a>
  </div>
</div>
</nav>





<div class="container">

  <form method="POST" action="weight.php">
<h3 class="headline">Regn ut ditt daglige kalori inntak</h1>

<div class="label">
  <input type="text" name="heightX" id="heightX" required/>
  <label>Høyde i cm: </label>
</div>

<div class="label">
  <input type="text" name="weightX" id="weightX" required/>
  <label>Vekt i kg: </label>
</div>

<div class="label">
  <input type="text" name="ageX" id="ageX" required/>
  <label>Alder: </label>
</div>

<div>
  <input type="checkbox" name="male" id="male">
  <label>Mann</label>
</div>

<div>
  <input type="checkbox" name="female" id="female">
  <label>Kvinne</label>
</div>

<h3>Aktivitet</h3>

<div>
  <input type="checkbox" name="" id="pal1">
  <label>Lite aktiv</label>
</div>

<div>
  <input type="checkbox" name="" id="pal2">
  <label>Moderat aktiv</label>
</div>

<div>
  <input type="checkbox" name="" id="pal3">
  <label>Svært aktiv </label>
</div>

<h3>Mål</h3>

<div>
  <input type="checkbox" name="" id="ned">
  <label>Ned i vekt</label>
</div>

<div>
  <input type="checkbox" name="" id="bli">
  <label>Vedlikeholde vekt</label>
</div>

<div class="bottom">
  <input type="checkbox" name="" id="opp">
  <label>Opp i vekt</label>
</div>

<div>
  <input type="submit" name="" id="" onclick="calorieCalc()">
</div>
<h3><span id="commentX"></span></h3>'

</div>
</form>

<script>
  if ( window.history.replaceState ) {
      window.history.replaceState( null, null, window.location.href );
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


<script src="./scripts/app.js"></script>

</body>
</html>
