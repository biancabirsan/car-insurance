<?php  include('server.php');
error_reporting(E_ALL ^ E_NOTICE);
session_start();

?>



<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>
<body>

<header>
            <div class="container">
            <div id="branding">
                <h1><span class="highlight">Insurance</span> Company</h1>
            </div>
            <nav>
                <ul>
                    <li class="current"><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><div class="dropdown">
                    <button class="dropbtn"><li><a href="#"><?php if (isset($_SESSION['username'])) : ?>Welcome <strong><?php echo $_SESSION['username']; ?></strong></a>
                    <?php endif ?></li> 
                   <i class="fa fa-caret-down"></i>
                   </button>
                   <div class="dropdown-content">
                        <a href="logout.php">Logout</a>
                        </div>
                    </div>
                                      
                   </class>
                   </class>
                   
                    </div>
                   </ul>
            </nav>
        </header>

        

        <div class="header2">
            <h2>Your details</h2>
        </div>
        <form method="post"> 
       
      
        <?php
           // First send the variables from page 1 to page 2(with the values) using POST method
           // Set the SESSION_VARIABLES page 2
           // Print ---> echo
             $_SESSION['make']=$_POST['make'];
             $_SESSION['model']=$_POST['model'];
             $_SESSION['price']=$_POST['price'];
             $_SESSION["engine"]=$_POST['engine'];
             $_SESSION["size"]=$_POST['size'];
             $_SESSION["area"]=$_POST['area'];
             $_SESSION["garage"]=$_POST['garage'];
             $_SESSION["age"]=$_POST['age'];
             $_SESSION["claim"]=$_POST['claim'];
     
     
     
                 echo ("Your car is ".$_SESSION['make']."<br />\n");
                 echo ("Your car model is ".$_SESSION["model"]."<br />\n");
                 echo ("The price of car is ".$_SESSION['price']."<br />\n");
                 echo ("Your car engine type is ".$_SESSION["engine"]."<br />\n");
                 echo ("Your car engine size is ".$_SESSION['size']."<br />\n");
                 echo ("The area you keep the car is ".$_SESSION['area']."<br />\n");
                 echo ("The car is kept in a garage ".$_SESSION['garage']."<br />\n");
                 echo ("Driver age ".$_SESSION['age']."<br />\n");
                 echo ("No claim discount ".$_SESSION['claim']."<br />\n");
     
    
        ?>
 

        <?php
            $make = $_REQUEST['make'];
            $model = $_REQUEST['model'];
            $price = $_REQUEST['price'];
            $engine= $_REQUEST['engine'];
            $size = $_REQUEST['size'];
            $area = $_REQUEST['area'];
            $garage = $_REQUEST['garage'];
            $age = $_REQUEST['age'];
            $claim = $_REQUEST['claim'];
            
        ?>


        <div class="input-group">
        <button type="submit" name="reset" formaction="calculator.php" class="btn">Get the quote</button>
        </div>
               
</form>

</body>

<html>