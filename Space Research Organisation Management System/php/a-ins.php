<html>
    <head><title>Space Crafts Details</title></head>
    <body>
    <div class="view">
<table>
<tr>
<th>Astronaut Id</th>
<th>Name</th>
<th>Age</th>
<th>Mission</th>
</tr><?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "sroms");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM astronauts";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['A_Id'] . "</td>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Age'] . "</td>";
                echo "<td>" . $row['M_Id'] . "</td>";
            echo "</tr>";
        }
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 
// Close connection
mysqli_close($link);
?>
        </table>
</div>
    <style>body{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    box-decoration-break: slice;
        letter-spacing: 1px;
        font-size:18px;
    font-family: 'Quicksand', sans-serif;
    background-image: url(../img/planetinspace.jpg);
        color: white;
        background-size: cover;}
    
        .view{
            padding: 80px;
        }
        .submit input [type=submit]{
            border: none;
    outline: none;
    height: 40px;
    background: #ff9933;
    color: #fff;
    font-size: 18px;
    font-weight: bold;
        }
        p{
            padding-top: inherit;
            padding-left: 80px;
        }
        .view  table {
            width: 600px;
            color: black;
            font-size: 20px;
            border: none;
            text-align: center;
        }
        .view  table input[type=submit]{
            background: #ffff00;
            font-size: 18px;
            border: none;
            border-radius: 20px;
        }
        th {
background-color: #3399ff;
color: black;
            height: 30px;
}
        tr:nth-child(even){
            background-color: #f2f2f2;
        }
        tr:nth-child(odd){
            background-color: #ddd;
        }
        form{
            padding-left: 80px;
        }
        .submit input[type=submit]{
            background: orange;
            border:none;
            color: white;
            font-weight: bolder;
            padding: 10px;
        }
    </style></body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add a new Spacecraft</title>
</head>
<body>
    <style>body{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    box-decoration-break: slice;
        letter-spacing: 1px;
        font-size:18px;
    font-family: 'Quicksand', sans-serif;
    background-image: url(../img/planetinspace.jpg);
        color: white;
        background-size: cover;}
    
        .view{
            padding: 80px;
        }
        .submit input [type=submit]{
            border: none;
    outline: none;
    height: 40px;
    background: #ff9933;
    color: #fff;
    font-size: 18px;
    font-weight: bold;
        }
        p{
            padding-top: inherit;
            padding-left: 80px;
        }
        .view  table {
            width: inherit;
            color: black;
            font-size: 20px;
            border: 0.5px;
            text-align: center;
        }
        .view  table input[type=submit]{
            background: #ffff00;
            font-size: 18px;
            border: none;
            border-radius: 20px;
        }
        th {
background-color: #3399ff;
color: black;
            height: 30px;
}
        tr:nth-child(even){
            background-color: #f2f2f2;
        }
        tr:nth-child(odd){
            background-color: #ddd;
        }
        form{
            padding-left: 80px;
        }
        .view input[type=submit]{
            background: transparent;
            border:none;
            color: white;
            font-weight: bolder;
            padding: 10px;
        }
        .view input[type=number] [type=text]{
            height: 30px;
        }
    </style>
    <div class="view">
<form action="ains.php" method="post">
	<table>
    <tr>
    	<th><label for="A_Id">Astronaut Id:</label></th>
        <th><input type="number" name="A_Id" id="A_Id"></th>
    </tr>
    <tr>
        <th><label for="Name">Name:</label></th>
        <th><input type="text" name="Name" id="Name"></th>
    </tr>
    <tr>
        <th><label for="Age">Age:</label></th>
        <th><input type="number" name="Age" id="Age"></th>
    </tr>
    <tr>
        <th><label for="M_Id"> In Mission:</label></th>
        <th><input type="number" name="M_Id" id="M_Id"></th>
    </tr>
    </table>
    <input type="submit" value="New Astronaut">
</form>
    </div>
</body>
</html>