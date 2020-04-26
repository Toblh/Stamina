<?php
#Markus

    function connect(){
        $host = 'localhost';
        $user = 'root'; 
        $password = '';
        $database = 'stamina';

        $con = mysqli_connect($host, $user, $password, $database);
        if(mysqli_connect_errno()){
            exit('Kunne ikke koble opp: ' . mysqli_connect_errno());
        }  
        return $con;
    }


//Sjekker om bruker er logget inn, hvis ikke , sendes til loginside 
    function isLoggedIn(){
        if (!isset($_SESSION['loggedin'])) {
            echo 'du må logge inn først';
            header('Location: login.html');
        exit;
        }
    }

//Kode for å hente ut siste registrerte vekt (i kg) og vise det på brukerens profilkort
//Denne har samme problem som den øverst, kunne vært bedre 
	function getWeight(){
        $con = connect();

        $sqlW = "SELECT weight FROM profile as p WHERE p.uId = $_SESSION[id] ORDER BY p.pId DESC LIMIT 1";
		$resultW = mysqli_query($con, $sqlW);
		if($resultW->num_rows > 0){
		while($rowW=mysqli_fetch_assoc($resultW))
		echo 'Din nåværende vekt er: ' . $rowW['weight'] . ' kg';
		} else {
			echo 'finner ingen data';
		}
    }	

    //Funkskon for og oppdatere vekt på profilsiden 
    function updateWeight(){
            $con = connect();
           if(isset($_POST['update_weight'])){
			$sqlW = "UPDATE profile SET weight = $_POST[update_weight] WHERE uId = $_SESSION[id]";
			if ($con->query($sqlW) === TRUE) {
				echo '';
			} else{
				echo 'noe er galt';
			}
		}
    }

    	//Funksjon for å sette inn bilde i databasen, lagres som BLOB
    function profileImg(){
        $con = connect();
        if(isset($_POST['insert'])){
			if($_FILES['image']['tmp_name']!=null){
				$file=addslashes(file_get_contents($_FILES['image']['tmp_name']));
				$sql= "INSERT INTO profImg values (null, '$file', $_SESSION[id])";
				if(mysqli_query($con,$sql)){
					
				}else{
					echo '<script>alert("Noe gikk galt, prøv igjen")</script>';
				}	
			}else{
				echo '<script>alert("Venligst velg et bilde som skal brukes");</script>';
			}
		}
    }


//Kode for å hente ut profilbilde, passer på at den alltid henter ut siste bilde
//Denne kan forbedres ettersom den ikke sletter gammelt bilde, noe som tar unødvendig lagreingsplass
    function getProfImg(){
        $con = connect();

        $sql = "SELECT Data FROM profImg as p WHERE p.userId = $_SESSION[id] ORDER BY p.imgId DESC LIMIT 1 ";
		$result = mysqli_query($con, $sql);
		while($row=mysqli_fetch_assoc($result)) {
		echo ' <img class="profpic" src="data:image/jpeg;base64, '.base64_encode($row['Data']).'">';
		}
    }


