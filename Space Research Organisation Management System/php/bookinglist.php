<?php
    session_start();
     $connection= mysqli_connect('localhost','root','','sroms');

    $select_query="SELECT * FROM `mission` ORDER BY M_Id DESC";
    $result= mysqli_query($connection,$select_query);
    

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking list</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>
    <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
  
  <br><br>
   <div class="container">
        <div class="row">
           <div class="col-md-12">
             <div class="page-header">
                <h1 style="text-align: center;">Missions</h1>
                 
              </div> 
              <table id="myTable" class="table table-bordered animated bounce">
                <thead>
                    
                    <th><label for="M_Id">M_Id:</label></th>
                    <th><label for="Name">Name:</label></th>
                    <th><label for="Budjet">Budget(cr):</label></th>
                    <th><label for="Goal">Goal:</label></th>
                    <th><label for="Startdate">Start Date:</label></th>
                    <th><label for="C_Id">Space Craft Id:</label></th>
                    <th><label for="No_years">No of years:</label></th>
                    <th><label for="V_Id">Rocket:</label></th>
                </thead>
                
                <tbody>
                    <?php while($row=mysqli_fetch_assoc($result)){ ?>
                    <tr>
                       
                        <td><?php echo $row['M_Id']; ?></td>
                        <td><?php echo $row['Name']; ?></td>
                        <td><?php echo $row['Budget']; ?></td>
                        <td><?php echo $row['Goal']; ?></td>
                        <td><?php echo $row['Startdate']; ?></td>
                        <td><?php echo $row['C_Id']; ?></td>
                        <td><?php echo $row['No_years']; ?></td>
                        <td><?php echo $row['V_Id']; ?></td>
                       
                        <td><a class="btn btn-danger" href="deleten.php?id=<?php echo $row['M_Id']; ?>">Delete</a></td>
                        
                    </tr>

                    <?php }   ?>
                </tbody>
            </table>
               <form action="insert.php" method="post">
	<table class="sumne">
    <tr>
    	<th><label for="M_Id"></label><input type="number" name="M_Id" id="M_Id">
        </th>
        <th><label for="Name"></label><input type="text" name="Name" id="Name"></th>
        <th><label for="Budjet"></label><input type="number" name="Budget" id="Budget"></th>
    
        <th><label for="Goal"></label><input type="text" name="Goal" id="Goal"></th>
    
        <th><label for="Startdate"></label><input type="date" name="Startdate" id="Startdate"></th>
    
        <th><label for="C_Id"></label><input type="number" name="C_Id" id="C_Id"></th>
    
        <th><label for="No_years"></label><input type="number" name="No_years" id="No_years"></th>
   
        <th><label for="V_Id"></label><input type="number" name="V_Id" id="V_Id"></th>
    </tr>
    </table>
    <input type="submit" value="Add Records">
</form>
            </div>
        </div>
   </div>
    <style>
        .table table-bordered animated bounce th{
            background-color: black;
        }
        .sumne{
            width: 1000px;
        }
    
    </style>
</body>

<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>
    
</html>