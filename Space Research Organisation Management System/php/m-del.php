

<!DOCTYPE html>
<html lang="en">
    <body>
    <div class="view">
<table>
<tr>
<th>Id</th>
<th>Name</th>
<th>Budget(cr)</th>
<th>Goal</th>
<th>Begins</th>
<th>SpaceCraft</th>  
<th>Years</th>
    <th>Rocket</th>
</tr>
    <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "sroms");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM mission";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['M_Id'] . "</td>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Budget'] . "</td>";
                echo "<td>" . $row['Goal'] . "</td>";
                echo "<td>" . $row['Startdate'] . "</td>";
                echo "<td>" . $row['C_Id'] . "</td>";
                echo "<td>" . $row['No_years'] . "</td>";
                echo "<td>" . $row['V_Id'] . "</td>";
                echo "<td>" . "<input type=submit name=update value=update>" . "</td>";
                echo "<td>" . "<input type=submit name=delete value=delete>" . "</td>";
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
    ?></table>
    </div>
    </body>
<head>
    <meta charset="UTF-8">
    <title>Delete Mission</title>
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
            width: 1200px;
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
        .submit input[type=submit]{
            background: orange;
            border:none;
            color: white;
            font-weight: bolder;
            padding: 10px;
        }
    </style>
<form action="delete.php" method="post">
	<p>
    	<label for="M_Id">M_Id:</label>
        <input type="number" name="M_Id" id="M_Id">
    </p>
    <div class="submit"><input type="submit" value="Delete record"></div>
</form>
</body>
</html>