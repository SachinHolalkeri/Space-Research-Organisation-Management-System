<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome to Space</title>
        <link rel="stylesheet" type="text/css" href="../css/homee.css">
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
        <div class="menu">
            <a href="homeal.php" class="cool-link"><button>HOME</button></a>
            <div class="dropdown">
                <button class="dropbtn" class="cool-link">EXPLORE</button>
                <div class="dropdown-content">
                    <a href="../php/tril.php"><li>MISSIONS</li></a>
                    <a href="../php/s-view.php"><li>SATELLITES</li></a>
                    <a href="../php/r-view.php"><li>LAUNCH VEHICLE</li></a>
                    <a href="../php/c-view.php"><li>SPACE CRAFTS</li></a>
                    <a href="../php/a-view.php"><li>ASTRONAUTS</li></a>
                </div>
            </div>
            <a href="about.html" class="cool-link"><button>ABOUT US</button></a>
            <a href="contact.html" class="cool-link"><button>CONTACT</button></a>
        </div>
    </nav>
    <section>
        <div class="leftside"></div>
        <div class="rightside">
            <h5>
                <b></b><br>
            </h5>
            <h1>
                Space welcomes you
            </h1>
            <h5>
                for unknown space
            </h5>
            <a href="../php/adlogin.php"><button>Admin</button></a>
            <a href="../php/login.php"><button>User</button></a>
        </div>
    </section>
</header>
    <style>
        .dropbtn {
  background-color: transparent;
  color: white;
  padding: 16px;
  font-size: 18px;
  border: none;
}
        .logo h1{
            color: orange;
        }

/* The container <div> - needed to position the dropdown content */
.dropdown {
  padding-top: 35px;
    position: relative;
  display: inline-block;
    font-size: 18px;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: transparent;
  width: 300px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: white;
  padding: 10px 10px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: transparent;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: transparent;opacity: 2px;}
    </style>
</body>
</html>