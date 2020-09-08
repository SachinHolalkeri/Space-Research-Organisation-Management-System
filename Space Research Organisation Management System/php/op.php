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
error_reporting(0);
 $_GET['mi'];
 $_GET['n'];
 $_GET['bg'];
 $_GET['g'];
 $_GET['sd'];
$_GET['ci'];
$_GET['ny'];
$_GET['vi'];
 
?>



<html>
<head>
   
<link rel='stylesheet' id='uncover-style-css'  href="CSS/theme.css" type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css'  href="CSS/bootstrap.css" type='text/css' media='all' />
    
</head>
<body class="home page-template-default page page-id-856 no-sidebar">
 <!-- #masthead -->
<!-- #custom-header -->
     


<form action="" method="GET">
     <tr>
        <div class="input">
            <label><h4>Mission Id:</h4></label>
            <input type="number" name="M_Id" value="<?php echo $_GET['mi']?>">
            </div>
    <br>
        </tr>
            
            <div class="input">
            <label><h4>Name:</h4></label>
            <input type="text" name="Name" value="<?php echo $_GET['n']?>">
            </div>
    <br>
    <tr>
        <div class="input">
            <label><h4>Budget(cr):</h4></label>
            <input type="number" name="Budget" value="<?php echo $_GET['bg']?>">
            </div>
    <br>
        </tr>
            <div class="input">
            <label><h4>Goal:</h4></label>
            <input type="text" name="Goal" value="<?php echo $_GET['g'] ?>">
            </div>
        <br>
            <div class="input">
            <label><h4>Space Craft Id:</h4></label>
            <input type="number" name="C_Id" value="<?php echo $_GET['ci'] ?>">
            </div>
        <br>
            <div class="input">
            <label><h4>No of years:</h4></label>
            <input type="number" name="No_years" value="<?php echo $_GET['ny'] ?>">
            </div>
    <br>
            <div class="input">
            <label><h4>Launch Vehicle:</h4></label>
            <input type="number" name="V_Id" value="<?php echo $_GET['vi'] ?>">
            </div>
    <br>
            <div class="input">
            <label><h4>Distance:</h4></label>
            <input type="datetime" name="Distance" value="<?php echo $_GET['sd'] ?>">
            </div>
            
           
            <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <input type="submit" name="submit" value="Update">
        </form>
<footer id="colophon" class="site-footer">

<div class="container">


<div class="site-info">
</div><!-- .site-info -->

</div><!-- .container -->

</footer><!-- #colophon -->
<!-- #page -->
    
</body>
</html>
<?php
if ($_GET['submit'])
{
    $mi = $_GET['M_Id'];
   $nm = $_GET['Name'];
   $bg =$_GET['Budget'];
   $g = $_GET['Goal'];
    $ci = $_GET['C_Id'];
    $ny = $_GET['No_years'];
    $vi = $_GET['V_Id'];
    $sd = $_GET['Distance'];
    
    
    $query = "UPDATE mission SET M_Id='$mi',Name='$nm',Budget='$bg',Goal='$g',C_Id='$ci',No_years='$ny',V_Id='$vi',Distance='$sd' where M_Id='$mi' ";
    $data = mysqli_query($con,$query);
    if($data)
    {
        header("location: trial.php");
    }
    else{
        echo "record not updated";
    }
}
?>
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
</style>