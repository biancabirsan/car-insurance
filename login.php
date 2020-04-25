<?php include('server.php');
?>


<!DOCTYPE html>
<html>
<head>
    <title>User registration system using PHP and MySQL</title>
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
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li class="current"><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="index.php" id="index">Get a quote</a></li>
                    

                </ul>
            </nav>
            </div>
        </header>

        <div class="header2">
            <h2>Login</h2>
        </div>

        <form method="post" action="calculator.php"> 
        <?php include('errors.php');?>
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" id="login_username">
            </div>
            
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" id="login_password">
            </div>
            
            <div class="input-group">
                <button type="submit" name="login" class="btn">Login</button>
                </div>
                <p>Not yet a member?<a href="register.php"> Sign up</a>
                </p>

                       
        </form>

           
                

       

        <footer>
            <p>Car Insurance Web Design, Copyright &copy; 2020</p>
      </footer>

        </body>
        </html>

