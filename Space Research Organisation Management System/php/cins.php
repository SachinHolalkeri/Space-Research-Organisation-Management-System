<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "sroms");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$C_Id = mysqli_real_escape_string($link, $_REQUEST['C_Id']);
$Name = mysqli_real_escape_string($link, $_REQUEST['Name']);
$Ast_Capacity = mysqli_real_escape_string($link, $_REQUEST['Ast_Capacity']);
$Sat_capacity = mysqli_real_escape_string($link, $_REQUEST['Sat_capacity']);
// attempt insert query execution
$sql = "INSERT INTO spacecraft (C_Id,Name,Ast_Capacity,Sat_capacity) VALUES ('$C_Id','$Name','$Ast_Capacity','$Sat_capacity')";

if(mysqli_query($link, $sql)){
    header("location: c-view.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>