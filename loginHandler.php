<?php
session_start();
include "connection.php";

if(isset($_POST["submit"])){

    $user=$_POST["user"];
    $pass=$_POST["pass"];
   

     $sql="SELECT * FROM doctor WHERE user=:user AND pass= :pass";
    $stmt=$pdo->prepare($sql);

    $stmt->execute(array("user"=>$user,"pass"=>$pass));

    if($stmt->rowCount()>0)  {
     
        $_SESSION['user']=$user;
        $_SESSION['pass']=$pass;
           
              header("location:doctinfo.php");
       }

    else {

        $sql="SELECT * FROM patient WHERE user=:user AND pass= :pass";
        $stmt=$pdo->prepare($sql);
        $result=$stmt->execute(array("user"=>$user,"pass"=>$pass));
        if($stmt->rowCount()>0)  {
        $_SESSION['user']=$user;
        $_SESSION['pass']=$pass;
              header("location:bookin.php");
    }else{
        $_SESSION['Fail']="invalid username or password";
         header("location:login.php");





    }
       



       }
}

        
?>
