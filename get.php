<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<style>


table, td, th {
    padding: 10px;
    background-color: #333;
    color: rgb(240, 168, 14); 
    font-size: 20px;
    text-align: right;
    width: 100%;
}

th {
    color: white;
}
table {
    border-radius: 20px;
    box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
    transition: 0.4s;
}

</style>
</head>

<body>
<?php
include 'include/functions.php';
#Markus
//Php script for databasehåndtering for å hente og liste ut øvelser 
$q = $_GET['q'];

$con = connect();

mysqli_select_db($con,"stamina");
$sql="SELECT name FROM excercise WHERE category = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Name: </th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>
