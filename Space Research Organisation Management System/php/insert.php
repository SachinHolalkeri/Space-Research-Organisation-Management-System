<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "sroms");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$M_Id = mysqli_real_escape_string($link, $_REQUEST['M_Id']);
$Name = mysqli_real_escape_string($link, $_REQUEST['Name']);
$Budget = mysqli_real_escape_string($link, $_REQUEST['Budget']);
$Goal = mysqli_real_escape_string($link, $_REQUEST['Goal']);
$C_Id = mysqli_real_escape_string($link, $_REQUEST['C_Id']);
$No_years = mysqli_real_escape_string($link, $_REQUEST['No_years']);
$V_Id = mysqli_real_escape_string($link, $_REQUEST['V_Id']);
$Distance = mysqli_real_escape_string($link, $_REQUEST['Distance']);

// attempt insert query execution
$sql = "INSERT INTO mission (M_Id,Name,Budget,Goal,C_Id,No_years,V_Id,Distance) VALUES ('$M_Id','$Name','$Budget','$Goal','$C_Id','$No_years','$V_Id','$Distance')";

if(mysqli_query($link, $sql)){
    header("location: trial.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>