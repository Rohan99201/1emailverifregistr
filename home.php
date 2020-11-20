<?php 

session_start();

if(!isset( $_SESSION['Username'])){
    echo "YOU ARE LOGGED OUT";
    header('location:login.php');
}

?>



<html>
<head>
    <title></title>
    <?php include 'css/styles.php'?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
<body>

<header>
    <nav class="navbar">
        <div class="logo">
            <a href="" target="_blank">ROHAN CHOUBEY</a>
        </div>

        <div class="menu">
            <ul>
                <li><a href="#" class="active"> HOME </a></li>
                <li><a href="#" > GALLERY </a></li>
                <li><a href="#" > SERVICES </a></li>
                <li><a href="#" > PORFOLIO </a></li>
                <li><a href="#" > ABOUT </a></li>
            </ul>
        </div>

        <div class="contact_btn">
            <a href="logout.php">LOGOUT</a>
        </div>
    </nav>

    <div class = "center_content">
        <h1>HELLO THIS IS  <?php echo $_SESSION['Username']; ?></h1>
        <h2>BACHELORS IN CS</h2>
    </div>

    <div class="social_network">
        <div class="fa_icons">
            <a href="#">
            <i class="fab fa-facebook-f" aria-hidden="true"></i>
            </a>
        </div>
        <div class="fa_icons">
            <a href="#">
            <i class="fab fa-twitter" aria-hidden="true"></i>
            </a>
        </div>
        <div class="fa_icons">
            <a href="#">
            <i class="fab fa-instagram" aria-hidden="true"></i>
            </a>
        </div>
        <div class="fa_icons">
            <a href="#">
            <i class="fab fa-youtube" aria-hidden="true"></i>
            </a>
        </div>
        <div class="grid_sec">
            <img src="">
        </div>

    </header>

    </body>
    </html>


