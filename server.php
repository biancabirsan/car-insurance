<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
// initializing variables
    $username= "";
    $email= "";
    $errors = array();

// connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'loginsystem');

    //Register user - if the register button is clicked

   if (isset($_POST['register'])){
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
        
        // ensure that form fileds are filled properly
        // form validation: ensure that the form is correctly filled;
        // by adding (array_push()) corresponding error unto $errors array
        if(empty($username)){
            array_push($errors, "Username is required"); // add error to errors array   
        }

        if(empty($email)){
            array_push($errors, "Email is required"); // add error to errors array   
        }

        if(empty($password_1)){
            array_push($errors, "Password is required"); // add error to errors array   
        }
        if(empty($password_2)){
            array_push($errors, "Please repeat the password"); // add error to errors array   
        }

        if($password_1 !== $password_2){
            array_push($errors, "The two password do not match"); // add error to errors array 
         
        }
    

        // first check the database to make sure 
       // a user does not already exist with the same username and/or email
        $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);
        
        if ($user) { // if user exists
            if ($user['username'] === $username) {
            array_push($errors, "Username already exists");
            }

            if ($user['email'] === $email) {
            array_push($errors, "Email already exists");
            }
        }

        // Finally, register user if there are no errors in the form
        if (count($errors) == 0) {
            $password = md5($password_1);//encrypt the password before saving in the database

            $query = "INSERT INTO users (username, email, password) 
                      VALUES('$username', '$email', '$password')";
            mysqli_query($db, $query);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index2.php'); //redirect to home page;
        } 
    }
        // LOGIN USER
    if (isset($_POST['login'])){
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0){
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($db, $query);
        if(mysqli_num_rows($result) == 1 ){
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: calculator.php');
        }else{
        
          array_push($errors, "Wrong username/password combination");

        }
    }   
    
}

?>