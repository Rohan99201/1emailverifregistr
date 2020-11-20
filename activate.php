<?php
    session_start();

    include 'dbcon.php';


    if(isset($_GET['token'])){

        $token = $_GET['token'];

        $updatequery = "update registration set status='active' where token='$token' ";

        $query = mysqli_query($con,$updatequery);

        if($query){
            if(isset($_SESSION['msg'])){
                $_SESSION['msg'] = "ACCOUNT UPDATED SUCCESSFULLY";
                header('location:login.php');
            }else{
                $_SESSION['msg'] = "USER LOGGED OUT.";
                header('location:login.php');
            }
               
        }else{
            $_SESSION['msg'] = "ACCOUNT NOT UPDATED.";
            header('location:regis.php');
        }
    }



?>