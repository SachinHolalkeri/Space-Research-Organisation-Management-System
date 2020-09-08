<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["logged"]) || $_SESSION["logged"] !== true){
    header("location: ../php/adlogin.php");
    exit;
}
?>
<!doctype html>
<html>
<head>
    <title>Admin</title>
        
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    </head>
<body>
    <header class="site-headers">
    <nav>
        <div class="logo">
            <h1>
                Space Research Organisation
            </h1>
        </div>
    </nav>
        <section>
        <div class="leftside"> </div>
        <div class="rightside">
            <div class="menu">
                <a><h1><b></b></h1></a>
                <a href="../php/trial.php" class="cool-link"><button>Missions</button></a>
                <a href="../php/s-ins.php" class="cool-link"><button>Satelliets</button></a>
                <a href="../php/r-ins.php" class="cool-link"><button>Launch Vehicles</button></a>
                <a href="../php/c-ins.php" class="cool-link"><button>Space Crafts</button></a>
                <a href="../php/a-ins.php" class="cool-link"><button>Astronauts</button></a>
                <a href="../php/adlogout.php" class="cool-link"><button>Log Out</button></a>
            </div>
        </div>
    </section>
        
    </header>
    </body>
    <style>
    body{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    box-decoration-break: slice;
    font-family: 'Quicksand', sans-serif;
    background-image: url(../img/henge.jpg);
    background-size: cover;
}
style{
    background-size: cover;
}

        .site-headers{
    width: 100%;
    height: 100vh;
    background: transparent;
    opacity: 1;
    color: #ddd;
}
nav{
    width: 100%;
    height: 100px;
    color: orange;
    display: flex;
}

.logo{
    width: 50%;
    height: 100px;
    background: transparent;
    opacity; 3px;
    font-size: 16px;
}

.logo h1{
    line-height: 90px;
    padding-left: 50px;
    font-family: 'Montserrat', sans-serif;
    font-weight: bolder;
    letter-spacing: 1px;
    color: orange;
}
        
.leftside{
    width:45%;height: auto;
    overflow: hidden;
    margin-top: 20px;}

section{
    display:flex;
}


.menu {
    widows: 100%;
    height: 100px;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    position: relative;
    align-content: center;padding-left: 250px;
    font-size: 80px;
}
        
.menu a button{
    color: white;
list-style: none;
font-size: 25px;font-family: 'Quicksand', sans-serif;
    padding: 15px;
    background: transparent;
    border:none;
    border-radius: 40px;
    font-weight: bolder;
    letter-spacing: 1px;
    position: relative;
}

.rightside{
    widows: 55%;
    height: 300px;
    color: #ff6600;
    text-align: center;
    align-content: center;
    margin-top: 80px;
    background: transparent;
    padding-left: 40px;
    display: flex;
}
        
.rightside button{
    font-size: 20%;
    font-weight: lighter;
    font-family: 'Quicksand', sans-serif;
    color: white;
    background: transparent;
    border-radius: 30px;
    padding-bottom: 10px;
    padding-top: 10px;
    padding-right: 15px;
    padding-left: 15px;
    margin: none;
    border: none;
}

.rightside button:hover{
    background: transparent;
    border-bottom: 30px;
    border-color: coral;
}
.cool-link::before{
    content:'';
    position: absolute;
    background: red;
}
.cool-link::after{
    content: '';
    display: block;
    width: 0;
    height: 0;
    background: orange;
    transition: .6s;
}

.cool-link:hover::after{
    transition: .5s;
    width: 100%;
    height: 3px;
    
}
    </style>
</html>