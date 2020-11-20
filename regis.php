

<?php

    session_start();

   

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
    $username = mysqli_real_escape_string($con, $_POST['username']) ;
    $email = mysqli_real_escape_string($con, $_POST['email']) ;
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']) ;
    $password = mysqli_real_escape_string($con, $_POST['password']) ;
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']) ;

    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

    $token = bin2hex(random_bytes(15));

    $emailquery = "select * from registration where email='$email' ";
    $query = mysqli_query($con,$emailquery);

    $emailcount = mysqli_num_rows( $query );
    if( $emailcount>0){
        echo "email already exists";
    }else{
        if($password === $cpassword ){

            $insertquery = "insert into registration(Username, email, mobile, password, cpassword, token, status) values('$username','$email','$mobile','$pass','$cpass','$token','inactive')";

            $iquery = mysqli_query($con, $insertquery);

            if($iquery){
               
                $subject = "EMAIL ACTIVATION";
                $body = "Hi, $username. CLICK HERE TO ACTIVATE YOUR ACCOUNT http://localhost/1emailverifregistr/activate.php?token=$token";
                $sender_email = "From: bsgxdronop@gmail.com";
                
                if (mail($email , $subject, $body, $sender_email)) {
                    $_SESSION['msg'] = "CHECK MAIL TO ACTIVATE YOUR ACCOUNT $email";
                    header('location:login.php');
                } else {
                    echo "Email sending failed...";
                }
                }else{
        
            ?>
                <script>
                        alert("not inserted");
                </script>
        
            <?php
            }

        }else{
            ?>
                <script>
                        alert("password are not matching");
                </script>
        
            <?php
        }
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
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
        </div>
        <input name="username" class="form-control" placeholder="FULL NAME" type="text" required>
    </div>


    <div class="form-group input-group">
                <div class="input-group-prepend">
                     <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
            </div>
            <input name="email" class="form-control" placeholder="EMAIL ADDRESS" type="email" required>
            </div>

            <div class="form-group input-group">
                <div class="input-group-prepend">
                     <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
            </div>
            <input name="mobile" class="form-control" placeholder="PHONE NO" type="number" required>
            </div>



    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        </div>
        <input class="form-control" placeholder="CREATE PASS" type="password" name="password" value="" required>
     </div>


     <div class="form-group input-group">
                <div class="input-group-prepend">
                     <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
            </div>
            <input class="form-control" placeholder="REPEAT PASS" type="password" name="cpassword"  required>
            </div>

            
     <div class="form-group">
        <button type="sumbit" name="sumbit" class="btn btn-primary btn-block"> CREATE ACCOUNT </button>
    </div>
        <p class="text-center">HAVE AN ACCOUNT? <a href="login.php">LOG IN</a> </p>
        </form>
    </article>
    </div>
</div>
</body>
</html>


