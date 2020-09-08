<style>
    td{
        padding:10px;
    }
    </style>

<?php

$con = mysqli_connect('localhost','root','');
if(!$con)
{
    echo "not connected";
}
if(!mysqli_select_db($con,"sroms"))
{
echo "database not selected";
}
error_reporting(0);?>
<html>
<head>
	<title>Mission Details</title>
<link rel='stylesheet' id='uncover-style-css'  href="CSS/theme.css" type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css'  href="CSS/bootstrap.css" type='text/css' media='all' />
</head>
<body class="home page-template-default page page-id-856 no-sidebar">
 <div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="container">		
		<div class="site-branding">
		
								<p class="site-title"><a href="../html/homeal.php" rel="home">Space research organisation</a></p>
								<p class="site-description">All you dream </p>
						</div><!-- .site-branding -->


	</div><!-- .container -->			
	</header><!-- #masthead -->
     <div class="lists">
         
         <!-- To display List-->
     </div>

    </div>
    </body></html>
	
<?php
$query = "SELECT * FROM mission ";
$data= mysqli_query($con,$query);
$total = mysqli_num_rows($data);


if($total !=0)
{
    ?>
    <table class="staf">
        <tr>
            <th>Mission Id</th>
            <th>Name</th>
            <th>Budget(cr)</th>
            <th>Goal</th>
            <th>Space craft Id</th>
            <th>No of Years</th>
            <th>Rocket</th>
            <th>Distance</th>
</tr>
    <?php
    while($result= mysqli_fetch_assoc($data))
    {
        echo "<tr>
        <td>".$result['M_Id']."</td>
        <td>".$result['Name']."</td>
        <td>".$result['Budget']."</td>
        <td>".$result['Goal']."</td>
        <td>".$result['C_Id']."</td>
        <td>".$result['No_years']."</td>
        <td>".$result['V_Id']."</td>
        <td>".$result['Distance']."</td>
</tr>";
        
        
    }
}
else{
    echo "No Missions yet";
}
?>
</table>
<a href='m-view.php'>MORE INFO</a>
<html>
          <body>
              <div class="view">

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
            padding-right: 80px;
            padding-top: inherit;
        }
                  .staf{
            padding: 80px;
        }
        input [type=submit]{
            text-decoration: none;
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
            width: 400px;
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
                  a{
                      text-decoration: none;
                      color: #ffaa00;
                      font-weight: 500;
                  }
                  table a{
                      text-decoration: none;
                      color: #ffaa00;
                      font-weight: 500;
                  }
                  a:hover{
                      cursor: pointer;
                  }
        th {
                background-color: #3399ff;
                color: black;
                height: 30px;
        }
                  td{
                      height: 20px;
                      color: black;
                      text-align: center;
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
<!-- #page -->
</body>
</html>