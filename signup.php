<?php
require_once "connection.php";
 
$username= $password = $confirm_password = "";
$username_err= $password_err =$confirm_password_err ="";
if($_SERVER['REQUEST_METHOD']=="POST"){
    //Check if username is empty
    if(empty(trim($_POST["username"]))){
    $username_err= "Username cannot be blank";   
    }
    else{
        $sql= "SELECT id FROM users WHERE username = ?";
        $stmt= mysqli_prepare($conn,$sql);
        if($stmt){
            mysqli_stmt_bind_param($stmt, "s" ,$param_username);
            //Set the value of para, username
            $param_username=trim($_POST['username']);
            //Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt)==1)
                {
                    $username_err ="This username is already taken";
                }
                else{
                    $username= trim($_POST['username']);
                }
            }
            else{
                echo "something went wrong";
            }
        }
    }
    mysqli_stmt_close($stmt);

//check for password
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password']))<5){
    $password_err="Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['password']);
}
//check for confirm password
if(trim($_POST['password'])!= trim($_POST['confirm_password']))
{
    $password_err="Passwords should match";
}
   

//If there were no errors, go ahead and insert into the database
if(empty($username_err)&& empty($password_err)&& empty($confirm_password_err))
{
    $sql = "INSERT INTO users (username ,password) VALUES(?,?)";
   $stmt = mysqli_prepare($conn, $sql);
    if($stmt)
    {
        mysqli_stmt_bind_param($stmt,"ss", $param_username,$param_password);

        //Set these parameters
        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);

        //Try to execute the query
        if(mysqli_stmt_execute($stmt))
        {
            header("location: login.php");
            exit;
        }
        else{
            echo "Something went wrong";
        }
    }
    mysqli_stmt_close($stmt);
}  
mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./login.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap"
      rel="stylesheet"
    />
    <title>Sign Up</title>
  </head>
  <body>
    <div class="main">
      <div class="navbar">
        <div class="icon">
          <div class="logo"><a href>Buzz & Bangs</a></div>
        </div>
        <div class="menu">
          <ul>
            <li><a href="./AboutUs.html">ABOUT US</a></li>
          </ul>
        </div>
      </div>
      <form method= "post" action="signup.php" class="Hidden-form" id="signup">
        <h4>SIGN UP</h4>
        <input type="text" name="username" placeholder="Enter Username" />
        <input
          type="password"
          name="password"
          placeholder="Enter New Password"
        />
        <input
          type="password"
          name="confirm_password"
          placeholder="Confirm Password"
        />
        <button type ="submit" value="signup">Sign Up</button>
        <h6 class="linker" id="linkLogin">Already have an account?</h6>
        <a href="./login.php" id="linkLogin" class="linker"><h6>Login</h6></a>
      </div>
    </div>
    <footer class="mainpage">
      <h5>CONTACT DETAILS</h5>
      <hr />
      <a href="mailto:j.drenee04@gmail.com"><h4>h.buzznbangs@gmail.com</h4></a>
      <h3>9769565652</h3>
      <div class="icons">
        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
        <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
        <a href="#"><ion-icon name="logo-google"></ion-icon></a>
      </div>
    </footer>

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    
  </body>
</html>
