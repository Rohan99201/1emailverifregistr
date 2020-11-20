<?php

    session_start();
    ob_start();
    
?>

<html>
 <head>
    <title></title>
    <?php include 'css/style.php' ?>
    <?php include 'links/links.php' ?>
 <head>
 <body>

<?php
include 'dbcon.php';

if(isset($_POST['sumbit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_search = "select * from registration where email='$email' and status='active' ";
    $query = mysqli_query($con, $email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count){
        $email_pass = mysqli_fetch_assoc($query);

        $db_pass = $email_pass['password'];

        $_SESSION['Username'] = $email_pass['Username'];

        $pass_decode = password_verify($password, $db_pass);

        if($pass_decode){

            if(isset($_POST['RememberMe'])){
                setcookie('emailcookie',  $email,time()+86400);
                setcookie('passwordcookie', $password ,time()+86400);
                echo "login successfull";
                ?>
                <script>
                    location.replace("home.php");
                </script>
                <?php
            }else {
            echo "login successfull";
            ?>
            <script>
                location.replace("home.php");
            </script>
            <?php
            }
        }else{
        echo "password incorrect";
        }
    }else{
        echo "invalid email";
    }

}


?>

 <div class="card bg-light">
 <article class="card-body mx-auto" style="max-width: 400px;">
    <h4 class="card-title mt-3 text-center">CREATE ACCOUNT</h4>
    <p class="text-center">GET STARTED WITH YOUR FREE ACCOUNT</p>
    <p>
         <a href="" class="btn btn-block btn-gmail"> <i class="fab fa-google"></i>  LOGIN VIA MAIL</a>
         <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>  LOGIN VIA FACEBOOK</a>
    </p>
    <p class="divider-text">
        <span class="bg-light">OR</span>
    </p>

    <div>
    
        <p class="bg-success text-white px-4"> <?php 
        
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
        }else{
            echo $_SESSION['msg'] = "YOU ARE LOGGED OUT. LOGIN AGAIN";
        }
        
        
        ?> </p>
    
    </div>


    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
        </div>
        <input name="email" class="form-control" placeholder="EMAIL" type="email" value="<?php if(isset($_COOKIE['emailcookie'])) { echo $_COOKIE['emailcookie']; } ?>">
    </div>

    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        </div>
        <input class="form-control" placeholder="ENTER PASSWORD" type="password" name="password" value="<?php if(isset($_COOKIE['passwordcookie'])) { echo $_COOKIE['passwordcookie']; } ?>">
     </div>



     <div class="form-group">
        <input type="checkbox" name="RememberMe" value="" > Remember Me
     </div>




     <div class="form-group">
        <button type="sumbit" name="sumbit" class="btn btn-primary btn-block"> LOGIN NOW</button>
    </div>
        <p class="text-center">NOT HAVE AN ACCOUNT? <a href="regis.php">SIGNUP HERE</a> </p>
        </form>
    </article>
    </div>
</div>
</body>
</html>