<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "sroms");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$Sat_Id = mysqli_real_escape_string($link, $_REQUEST['Sat_Id']);
$Name = mysqli_real_escape_string($link, $_REQUEST['Name']);
$Purpose = mysqli_real_escape_string($link, $_REQUEST['Purpose']);
$Dimensions = mysqli_real_escape_string($link, $_REQUEST['Weight']);
$Cost = mysqli_real_escape_string($link, $_REQUEST['Cost']);
$Launch_date = mysqli_real_escape_string($link, $_REQUEST['Launch_date']);
$C_Id = mysqli_real_escape_string($link, $_REQUEST['C_Id']);

// attempt insert query execution
$sql = "INSERT INTO satellites (Sat_Id,Name,Purpose,Weight,Cost,Launch_date,C_Id) VALUES ('$Sat_Id','$Name','$Purpose','$Dimensions','$Cost','$Launch_date','$C_Id')";

if(mysqli_query($link, $sql)){
    header('location: s-view.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>