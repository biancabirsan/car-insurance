<?php include('server.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>User registration system using PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
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
                    <li><a href="login.php">Login</a></li>
                    <li class="current"><a href="register.php">Register</a></li>
                    <li><a href="index.php" id="index">Get a quote</a></li>
                </ul>
            </nav>
            </div>
        </header>

    <div class="formheader">
            <h2>Register</h2>
        </div>

        <div class="loginform">
        <form method="post" action="register.php"> 
        <!--display--validation errors here--->
        <?php include('errors.php'); ?>
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" id="register_username" value="<?php echo $username?>">
            </div>
            <div class="input-group">
                <label>Email</label>
                <input type="text" name="email" id="register_email" value="<?php echo $email?>">
        	</div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" id="register_password" name="password_1">
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" id="register_password_verify" name="password_2">
            </div>
            <div class="input-group">
                <button type="submit" name="register" class="btn">Register</button>
                </div>
                <p>Already a member? <a href="login.php">Sign in</a>
                </p>

        </div>      
        </form>
        <br>

        <footer>
           <p>Car Insurance Web Design, Copyright &copy; 2020</p>
      </footer>

    </body>

</htm>

