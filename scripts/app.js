// Tobias
const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector("#nav-links");
const links = document.querySelectorAll("#nav-links li");

hamburger.addEventListener("click", () => {
  navLinks.classList.toggle("open");
  links.forEach(link => {
    link.classList.toggle("fade");
  });
});


function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Lukker dropdown menyen etter en bruker klikker utenfor 
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

//Markus
function calorieCalc(){
	var height = Number(document.getElementById("heightX").value);
	var weight = Number(document.getElementById("weightX").value);
	var age    = Number(document.getElementById("ageX").value);
	//var training = Number(document.getElementById("training").value)
	var s;
	var pal;
	var goal;


	if (height=="" || weight=="" || age=="") {
		alert ("Venligst fyll inn alle punktene")
	}
	else {

		if (pal = document.getElementById("pal1").checked){
			pal = 1.2;
		}
		else if (pal = document.getElementById("pal2").checked){
			pal = 1.6;
		}
		else if (pal = document.getElementById("pal3").checked){
			pal = 2.0; 
		}

	
		if (s = document.getElementById("male").checked){
			s = 5;
		}
		else if (document.getElementById("female").checked){
			s = -161;
		}



		if (goal = document.getElementById("ned").checked) {
			goal -= 500; 
		}
		else if (goal = document.getElementById("bli").checked) {
			goal += 0;
		}
		else if (goal = document.getElementById("opp").checked) {
			goal += 300 ;
		}
	
		var BMR = Math.round((10 * weight) + (6.25*height) - (5 * age) + s);

	var cal = Math.round( BMR * pal + goal);

	document.getElementById("commentX").innerText = "Daglig kcal inntak er: " + cal; 
	}
}


document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
      e.preventDefault();

      document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
      });
  });
});

//Sondre 
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
if (prevScrollpos > currentScrollPos) {
  document.getElementById("nav-links").style.top = "0";
} else {
  document.getElementById("nav-links").style.top = "-50px";
}
prevScrollpos = currentScrollPos;
}

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});