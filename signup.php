<?<php
session_start();
    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
      $username = $_POST['username'];
      $password = $_POST['password'];
      
      if(!empty($username) && !empty($password) && !is_numeric($username))
      {
        $user_id = random_num(20);
        $query = "insert into users (user_id, username, password) values ('$user_id', '$username', '$password')"
        mysqli_query($con, $query);
        header("Location: login.php");
        die;
      }else
      {
        echo "Please enter Correct Username/Password"
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
      <div class="Hidden-form" id="signup">
        <h4>SIGN UP</h4>
        <input type="text" name="username" placeholder="Enter Username" />
        <input
          type="password"
          name="password"
          placeholder="Enter New Password"
        />
        <input type="password" name="password" placeholder="Confirm Password" />
      
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
    <script src="./login.js"></script>
  </body>
</html>
