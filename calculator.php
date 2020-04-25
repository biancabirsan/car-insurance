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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    
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
                    <li><a href="index.php" id="index">Get a quote</a></li>
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

<div class="colwrapper">

<div class="colbox"><h2>Basic</h2>
    <p>Liability is to protect you, the driver, in the event that you are responsible for an accident or if you are held responsible even if you did not technically cause one. </p>
    <p>This coverage includes damages, medical expenses, lost wages, as well as other consequences suffered by those who sustained injuries as a result of the accident.</p>
    <ul>
        <li>Your basic car insurance cost:</li>
            <?php
            // Basic premium is 150£ per 1000 
            $price = $_SESSION['price'];
            $basicprice = $price / 1000 * 150;
            echo $basicprice."€";
            ?>
        <li>Loading 40 % applied for drivers under the age of 25:</li>
            <?php 
            if($_SESSION['age'] < 25){
                $loadings = $basicprice * 40/100;    
            }
            else if($_SESSION['age'] >= 25 ){
                $loadings = 0 ; 
            }
            echo $loadings;
            ?>

        <li>Discount 10 % for garage:</li>
            <?php 
            if($_SESSION['garage'] == "Yes" ){
                $discountgarage = $basicprice * 10/100;
                
            }
            else if($_SESSION['garage'] == "No" ){
                $discountgarage = 0 ; 
            }
            echo $discountgarage;
            ?>

        <li>No claim bonus:</li>
            <?php 
            if($_SESSION['claim'] == "Yes" ){
                $bonus = ($basicprice + $loadings - $discountgarage) * 30/100;
            
                }
                else if($_SESSION['claim'] == "No" ){
                    $bonus = 0 ; 
                }
                echo $bonus;
            ?>
        <br>
        <strong> Total price for basic car insurance is:
            <?php 

                $totalprice = $basicprice + $loadings - $discountgarage - $bonus;
                echo $totalprice."€";
            ?>
        </strong>
    </ul>
</div>
    

<div class="colbox"><h2>Premium</h2>
    <p>This level of auto insurance involves coverage for repairs to your vehicle that need to be made as a result of a traffic accident, no matter who is at fault.</p>
    <p> It also covers property damage and any damage to the vehicle that is a result of collision with trees, buildings, etc. Collision insurance also offers a replacement provision. </p>
    <ul>
        <li>Your basic car insurance cost:</li>
            <?php
            // Basic premium is 200€ per 1000 €
                $price = $_SESSION['price'];
                $basicprice = $price / 1000 * 200;
                echo $basicprice."€";
            ?>
        <li>Loading 40 % applied for drivers under the age of 25:</li>
            <?php 
            if($_SESSION['age'] < 25){
                $loadings = $basicprice * 40/100;
                
            }
            else if($_SESSION['age'] >= 25 ){
                $loadings = 0 ; 
            }
                echo $loadings; 
            ?>

        <li>Discount 10 % for garage:</li>
            <?php 
            if($_SESSION['garage'] == "Yes" ){
                $discountgarage = $basicprice * 10/100;
                
            }
            else if($_SESSION['garage'] == "No" ){
                $discountgarage = 0 ; 
            }
            echo $discountgarage;
            ?>

        <li>No claim bonus:</li>
            <?php 
            if($_SESSION['claim'] == "Yes" ){
                $bonus = ($basicprice + $loadings - $discountgarage) * 30/100;
            
                }
                else if($_SESSION['claim'] == "No" ){
                    $bonus = 0 ; 
                }
                echo $bonus;
            ?>
        <br>
        <strong>Total price for premium car insurance is:
            <?php 

                $totalprice = $basicprice + $loadings - $discountgarage - $bonus;
                echo $totalprice."€";
            ?>
        </strong>
    </ul>
</div>

<div class="colbox"><h2>Comprehensive</h2>
    <p>Comprehensive car insurance provides you with a greater level of protection as any damage to your own vehicle resulting from an incident, a fire, or theft will be covered by your insurer, as well as any damage to other parties.</p>
    <p>This cover incorporates third party, fire and theft cover and also includes accidental damage to your car. </p>
    <ul>
        <li>
            <?php
            // Basic premium is 250€ per 1000€
            $price = $_SESSION['price'];
            $basicprice = $price / 1000 * 250;
            echo "Your comprehensive cost is : ".$basicprice."€";
            ?>

        <li>The basic premiun loading for driver age under 25 is 40 % :</li>
            <?php 
            if($_SESSION['age'] < 25){
                $loadings = $basicprice * 40/100;  
            }
            else if($_SESSION['age'] >= 25 ){
                $loadings = 0 ; 
            }
            echo $loadings;
            ?>

        <li>Discount 10 % for garage:</li>
            <?php 
            if($_SESSION['garage'] == "Yes" ){
                $discountgarage = $basicprice * 10/100;
                
            }
            else if($_SESSION['garage'] == "No" ){
                $discountgarage = 0 ; 
            }
            echo $discountgarage;
            ?>

        <li>No claim bonus:</li>
            <?php 
            if($_SESSION['claim'] == "Yes" ){
                $bonus = ($basicprice + $loadings - $discountgarage) * 30/100;
            
                }
                else if($_SESSION['claim'] == "No" ){
                    $bonus = 0 ; 
                }
                echo $bonus;
            ?>
    <br>
    <strong>Total price - comprehensive car insurance:
            <?php 

                $totalprice = $basicprice + $loadings - $discountgarage - $bonus;
                echo $totalprice."€";
            ?>
    </strong>  
    </ul>
</div>
</div>

<div style="clear:both"></div>

    <a href="resetvalues.php" div class="resetbutton" class="button">Recalculate the insurance cost</a>
    
</body>


<footer>
            <p>Car Insurance Web Design, Copyright &copy; 2020</p>
</footer>



</html>
    



