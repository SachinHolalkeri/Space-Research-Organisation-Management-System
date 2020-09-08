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
 $_GET['id'];
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
     


<center><form action="" method="GET">
     <tr>
        <div class="input">
             <label><h4>Mission Id:</h4></label>
            <input type="number" name="M_Id" value="<?php echo $_GET['mi']?>">
            </div>
    <br>
        </tr>
            
            <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <input type="submit" name="submit" value="Delete">
    </form></center>
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
    
    
    $query = "delete from mission where M_Id='$mi' ";
    $data = mysqli_query($con,$query);
    if($data)
    {
        header("location: trial.php");
    }
    else{
        echo "record not deleted";
    }
}
?>
<style>body{
    margin: 0;
    padding: 300px;
    box-sizing: border-box;
    box-decoration-break: slice;
        letter-spacing: 1px;
        font-size:18px;
    font-family: 'Quicksand', sans-serif;
    background-image: url(../img/planetinspace.jpg);
        color: white;
        background-size: cover;}
</style>