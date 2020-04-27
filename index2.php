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

            <div class="formheader">
            <h2>Get a quick quote!</h2>
        </div>

        <form method="post" div class="loginform"> 
       
        <label><strong>Find your car by make and model</strong></label><br>


        Car <br><select name="make" div class="custom-select" <?php $_SESSION["make"]=$_POST['make'];?> value="<?php $_POST['make']?>" formaction="index.php" method="submit"  onchange='if(this.value != 0) { this.form.submit(); }'>
                      
                        <option value="0">Select</option>
                        <option value="Toyota"<?php if($_POST['make']=='Toyota') echo 'selected="selected"';?>>Toyota</option>
                        <option value="Volkswagen"<?php if($_POST['make']=='Volkswagen') echo 'selected="selected"';?>>Volkswagen</option>
                        <option value="BMW"<?php if($_POST['make']=='BMW') echo 'selected="selected"';?>>BMW</option>
                        <option value="Honda"<?php if($_POST['make']=='Honda') echo 'selected="selected"';?>>Honda</option>
                        <option value="Renault"<?php if($_POST['make']=='Renault') echo 'selected="selected"';?>>Renault</option>
                        <option value="Ford"<?php if($_POST['make']=='Ford') echo 'selected="selected"';?>>Ford</option>
                        </select>
                        
        
        Model<br><select name="model" div class="custom-select" <?php $_SESSION["model"]=$_POST['model'];?> value="<?php $_POST['model']?>"action="index.php">
                        <?php  
                        if ($_POST['make'] == "Toyota"):
                        ?>
                        <option value="0">Select</option>
                        <option value="Aygo">Aygo</option>
                        <option value="Auris">Auris</option>
                        <option value="Corolla">Corolla</option>
                        <?php endif; ?>

                        <?php
                        if ($_POST['make'] == "Volkswagen"):
                        ?>
                        <option value="0">Select</option>
                        <option value="Arteon">Arteon</option>
                        <option value="Atlas">Atlas</option>
                        <option value="Golf">Golf</option>

                        <?php endif; ?>

                        <?php
                        if ($_POST['make'] == "BMW"):
                        ?>
                        <option value="0">Select</option>
                        <option value="X3">X3</option>
                        <option value="X5">X5</option>
                        <option value="X6">X6</option>
                        <?php endif; ?>

                        <?php
                        if ($_POST['make'] == "Honda"):
                        ?>
                        <option value="0">Select</option>
                        <option value="Accord">Accord</option>
                        <option value="Brio">Brio</option>
                        <option value="Amaze">Amaze</option>
                        <?php endif; ?>

                        <?php
                        if ($_POST['make'] == "Renault"):
                        ?>
                        <option value="0">Select</option>
                        <option value="Captur">Captur</option>
                        <option value="Clio">Clio</option>
                        <option value="Duster">Duster</option>
                        <?php endif; ?>

                        <?php
                        if ($_POST['make'] == "Ford"):
                        ?>
                        <option value="0">Select</option>
                        <option value="Edge">Edge</option>
                        <option value="Escape">Escape</option>
                        <option value="Everest">Everest</option>
                        <?php endif; ?>
                       
        </select>
        </select>
        </div>
            
             Vehicle value<br> <input type="text" div class="custom-select" name="price" value="<?php $_POST['price']?>" ></div>
        

        Engine type<br><select name="engine" div class="custom-select" <?php $_SESSION["engine"]=$_POST['engine'];?> value="<?php $_POST['engine']?>">
                        
                        <option value="">Select</option>
                      
                        <option value="Diesel">Diesel</option>
                      
                        <option value="Petrol">Petrol</option>
                        <option value="Electric">Electric</option>
                    
        </select>
        </div>

        Engine size<br><select name="size" div class="custom-select" <?php $_SESSION["engine"]=$_POST['engine'];?> value="<?php $_POST['size']?>">
                        
                        <option value="">Select</option>
                      
                        <option value="1L - 1.99L">1L - 1.99L</option>
                      
                        <option value="2L - 2.99L">2L - 2.99L</option>
                        <option value="3L - 3.99L">3L - 3.99L</option>
                        <option value=" More than 4 L"> More than 4 L</option>
                    
        </select>
        </div>
        

        Area kept overnight<br> <select name="area" div class="custom-select" value="<?php $_POST['area']?>" >
                            <option value="0">Select county</option>
                             <option value="Dublin">Dublin</option>
                             <option value="Cork">Cork</option>
                             <option value="Galway">Galway</option>
                             <option value="Kerry">Kerry</option>
                             <option value="Limerick">Limerick</option>
                             <option value="Wicklow">Wicklow</option>    

        </select>
        </div>
        
        The car is kept in a garage<br>
        <input type = "radio" name = "garage" value = "No" value="<?php $_POST['garage']?>"> No
        <input type = "radio" name = "garage" value = "Yes" value="<?php $_POST['garage']?>"> Yes
        <br>
        
        Driver age<br> <input type = "text" div class="custom-select" value="<?php $_POST['age']?>" name = "age" size = "2"><br>

        No claim bonus: <br>
        <input type = "radio" name = "claim" value = "No" value="<?php $_POST['claim']?>"> No
        <input type = "radio" name = "claim" value = "Yes" value="<?php $_POST['claim']?>"> Yes
        <br> 
            
        <div class="input-group"  id="results">
            <button type="submit"  value='submit' formaction="result.php" class="btn">Submit</button>
            </div> 

        </div>
        </form>
        <br>
    
    <footer>
       <p>Car Insurance Web Design, Copyright &copy; 2020</p>
    </footer>		

 </body>

</html>
