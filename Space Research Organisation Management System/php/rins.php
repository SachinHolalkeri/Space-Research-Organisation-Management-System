<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "sroms");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$V_Id = mysqli_real_escape_string($link, $_REQUEST['V_Id']);
$Name = mysqli_real_escape_string($link, $_REQUEST['Name']);
$Fuel = mysqli_real_escape_string($link, $_REQUEST['Fuel']);
// attempt insert query execution
$sql = "INSERT INTO Launchvehicle (V_Id,Name,Fuel) VALUES ('$V_Id','$Name','$Fuel')";

if(mysqli_query($link, $sql)){
    header("location: r-ins.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>