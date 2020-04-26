<?php
$host = 'localhost';
$user = 'root'; 
$password = '';
$database = 'stamina';

$con = mysqli_connect($host, $user, $password, $database);
if(mysqli_connect_errno()){
    exit('Kunne ikke koble opp: ' . mysqli_connect_errno());
}  

if(!isset($_POST['username'], $_POST['password'], $_POST['email'])) {
    exit('Vennligst fyll ut alle feltene');
}

if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
    exit('Venligst fyll ut alle feltene');
}

if($stmt = $con->prepare('SELECT id, password FROM users WHERE username = ?')) {
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows > 0) {
        echo '<script type="text/javascript">'; 
        echo 'alert("Brukernavn eksisterer, velg et annet")';
        echo '</script>';
    } else {
        if($stmt = $con->prepare('INSERT INTO users(username, password, email) VALUES (?,?,?)')) {
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
            $stmt->execute();
            echo '<script type="text/javascript">'; 
            echo 'alert("Vellykket registrering, venligst logg inn")';
            echo '</script>';
            header('Location: login.html');
        }
    }
    $stmt->close();
} else {
    echo 'Could not prepare statement';
}
$con->close();
?>
