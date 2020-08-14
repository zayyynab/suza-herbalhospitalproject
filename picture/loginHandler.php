<?php
session_start();
include "connection.php";

if(isset($_POST["submit"])){

    $user=$_POST["user"];
    $pass=$_POST["pass"];
    $pass=sha1($pass);

    $sql="SELECT user,pass FROM doctor WHERE (user=:user AND pass=:pass)";

$stmt=$pdo->prepare($sql);
        $stmt->execute(array('user'=>$user,'pass'=>$pass));
        if($stmt->rowCount()==1){
            session_start();
            $_SESSION['user']=$user;
            $_SESSION['role']="doctor";   
            header("location:viewbooking.php");
       

    }else{
            $sql="SELECT user,pass FROM patient WHERE (user=:user AND pass=:pass)";
            $stmt=$pdo->prepare($sql);
            $stmt->execute(array('user'=>$user,'pass'=>$pass));
            if($stmt->rowCount()==1){
                session_start();
                $_SESSION['user']=$user;
                $_SESSION['role']="patient";

                header("location:booking.php");
            }
           } 
                    
}else{
        header("location:login.php");
    }
 ?>




