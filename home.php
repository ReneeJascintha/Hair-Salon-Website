<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!==true)
{
    header("location: login.php");
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="home.css" />

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
    <title>Home page</title>
  </head>
  <body>
    <div class="main">
      <div class="navbar">
        <div class="icon">
          <div class="logo"><a href>Buzz & Bangs</a></div>
        </div>
        <div class="menu">
          <ul>
            <li><a href="./AboutUs.html">APPOINTMENTS</a></li>
          </ul>

          <a href="./Cartpage.html">
            <ul>
              <li><img class="cart" src="./images/carticon.jpg" /></li>
            </ul>
          </a>

          <ul>
            <li><a href="./AboutUs.html">ABOUT US</a></li>
          </ul>
          <div class="search">
            <input type="search" class="srch" name="" placeholder="Search" />
          </div>
          <img src="./images/srch-icon.png" class="srch-icon" />
          <li>
            <div class="dropdown">
            <img
                src="./images/profile-icon.png"
                alt="">
            <div type="" class="dropdown-content">
              <a href="#">MY PROFILE</a>
              <a href="#">SETTINGS</a>
             <a href="#">HELP</a>
              <a href="logout.php">LOG OUT</a>
        </div>
      </div>
    </div>
  </div>   
      
      <div class="fade impdiv" id="welc">We'll Style,</div>
      <div class="fade impdiv" id="topart">
        <span> You'll Smile!</span>
      </div>
      <div class="btext">
        <h2>Recommended for you</h2>
      </div>
      <div class="bsalon">
        <a href="./salonpage.html">
          <div class="dabba1">
            <img src="./images/Hsalon1.jfif" class="img1" />
            <a href="./salonpage.html" class="sname1">Cutting the Crap</a>
            <a href="./page6"><button class="but1">HairCut</button></a>
            <a href="./page6"><button class="but2">Hair Color</button></a>
            <a href="./page6"><button class="but3">Hair Spa</button></a>
            <p class="address">B/23, Kasturba Marg, Bandra</p>
          </div>
        </a>
        <div class="dabba2">
          <img src="./images/Hsalon2.jfif" class="img1" />
          <a href="./salonpage.html" class="sname1">Denish</a>
          <a href="./page6"><button class="but1">HairCut</button></a>
          <a href="./page6"><button class="but2">Hair Color</button></a>
          <a href="./page6"><button class="but3">Hair Spa</button></a>
          <p class="address">A-20, Linking Road, Bandra</p>
        </div>

        <div class="dabba4">
          <img src="./images/Hsalon4.jfif" class="img1" />
          <a href="./salonpage.html" class="sname1">Zido Salon</a>
          <a href="./page6"><button class="but1">HairCut</button></a>
          <a href="./page6"><button class="but2">Hair Color</button></a>
          <a href="./page6"><button class="but3">Hair Spa</button></a>
          <p class="address">Shop no. 4, S.V Road, Bandra</p>
        </div>
        <div class="dabba5">
          <img src="./images/Hsalon5.jfif" class="img1" />
          <a href="./salonpage.html" class="sname1">Citrus The Salon</a>
          <a href="./page6"><button class="but1">HairCut</button></a>
          <a href="./page6"><button class="but2">Hair Color</button></a>
          <a href="./page6"><button class="but3">Hair Spa</button></a>
          <p class="address">B-32, Carter Road, Khar West</p>
        </div>
        <div class="dabba6">
          <img src="./images/Hsalon6.jfif" class="img1" />
          <a href="./salonpage.html" class="sname1">Groom Salon</a>
          <a href="./page6"><button class="but1">HairCut</button></a>
          <a href="./page6"><button class="but2">Hair Color</button></a>
          <a href="./page6"><button class="but3">Hair Spa</button></a>
          <p class="address">R45, Carter Road, Khar West</p>
        </div>

        <div class="dabba8">
          <img src="./images/Hsalon8.jfif" class="img1" />
          <a href="./salonpage.html" class="sname1">Style Salon</a>
          <a href="./page6"><button class="but1">HairCut</button></a>
          <a href="./page6"><button class="but2">Hair Color</button></a>
          <a href="./page6"><button class="but3">Hair Spa</button></a>
          <p class="address">8, RD Road, Mahim West</p>
        </div>
      </div>
      <div class="box1">
        <div class="dabba">
          <p id="head1">LET YOUR HAIR<br /></p>
          <p id="head2">DO THE TALKING!</p>
          <img src="./images/homimg1.jpg" />
        </div>
        <div class="box2">
          <div class="dabba">
            <p id="head3">YOUR HAIR IS THE<br /></p>
            <p id="head4">CROWN</p>
            <p id="head41">YOU NEVER TAKE OFF!</p>
            <img src="./images/homimg2.jpg" />
          </div>
        </div>
        <div class="box3">
          <div class="dabba">
            <p id="head5">DON'T MAKE A WISH,<br /></p>
            <p id="head6">MAKE AN APPOINTMENT!</p>
            <img src="./images/homimg3.jpg" />
          </div>
        </div>
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
