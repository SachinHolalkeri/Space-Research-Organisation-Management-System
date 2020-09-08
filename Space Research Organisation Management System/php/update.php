<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "sroms");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$M_Id = mysqli_real_escape_string($link, $_REQUEST['M_Id']);
$Name = mysqli_real_escape_string($link, $_REQUEST['Name']);
$Budget = mysqli_real_escape_string($link, $_REQUEST['Budget']);
$Goal = mysqli_real_escape_string($link, $_REQUEST['Goal']);
$Startdate = mysqli_real_escape_string($link, $_REQUEST['Startdate']);
$C_Id = mysqli_real_escape_string($link, $_REQUEST['C_Id']);
$No_years = mysqli_real_escape_string($link, $_REQUEST['No_years']);
$V_Id = mysqli_real_escape_string($link, $_REQUEST['V_Id']);


// Attempt update query execution
$sql = "update mission set Name='$Name',Budget='$Budget',Goal='$Goal',Startdate='$Startdate',C_Id='$C_Id',No_years='$No_years',V_Id='$V_Id' WHERE M_Id='$M_Id'";

if(mysqli_query($link, $sql)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>