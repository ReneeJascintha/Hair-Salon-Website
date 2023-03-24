<?php
//will handle login
session_start();

//check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: home.php");
    exit;
}
require_once "connection.php";
$username = $password = "";
$err ="";

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username=trim($_POST['username']);
        $password=trim($_POST['password']);
    }

    if(empty($err))
    {
        $sql="SELECT id,username,password FROM users WHERE username = ?";
        $stmt=mysqli_prepare($conn,$sql);
        mysqli_stmt_bind_param($stmt, "s" , $param_username);
        $param_username = $username;
        //try to execute
        if(mysqli_stmt_execute($stmt))
        {
          mysqli_stmt_store_result($stmt);
          if(mysqli_stmt_num_rows($stmt) == 1)
          {
           mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
          if(mysqli_stmt_fetch($stmt))
          {
            if(password_verify($password, $hashed_password))
            {
                //this means password is correct
                session_start();
                $_SESSION["username"]= $username;
                $_SESSION["id"]= $id;
                $_SESSION["loggedin"]= true;

                //redirect user to welcome page
                header("location: home.php");
            }
          }  
        }
        }
    }
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

    <title>Login</title>


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

      <form  method= "post" action="login.php" class="form" id="login">
        <h4>LOGIN HERE</h4>
        <input
          type="text"
          name="username"
          class="input"
          placeholder="Enter Username"
        />
        <input
          type="password"
          name="password"
          class="input"
          placeholder="Enter Password"
        />

        <br>
        <br>
        <button value ="login" type="submit">Login</button>
        <h6 class="linker" id="linkSignup">Don't have an account?</h6>
      
        <a href="signup.php" id="linkSignup" class="linker"><h6>Sign Up</h6></a>
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
