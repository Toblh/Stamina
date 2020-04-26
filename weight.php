<?php
include 'include/functions.php';

session_start();

isLoggedIn();


$con = connect();

$sql = "INSERT INTO profile (height, weight, age, uId) 
            VALUES ($_POST[heightX], $_POST[weightX], $_POST[ageX], $_SESSION[id])";
    if($con->query($sql) === TRUE) {
            header('Location: tools.php');
    } else {
        echo "noe er galt";
    }

$con->close();

?>