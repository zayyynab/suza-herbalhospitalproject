<?php 

  include 'connection.php';

  if (isset($_POST['submit'])){
    $pname = $_POST['pname']; 
     $did = $_POST['did'];
    $address = $_POST['address'];
    $email = $_POST['email']; 
    $phone = $_POST['phone'];
     $bid = $_POST['bid'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    

    
    
    $sql = "INSERT INTO patient ( pname, did, address, email, phone, bid, user, pass)
    VALUES (:pname,:did, :address, :email, :phone, :bid,:user,:pass)";

    $stmt = $pdo->prepare($sql);
    $insert = $stmt->execute(
      array(
        ':pname' => $pname,
        ':did' => $did,
        ':address' => $address,
        ':email' => $email,
        ':phone' => $phone,
        ':bid' => $bid,
        ':user' => $user,
        ':pass' => $pass,
         )
    );
      header('location:login.php');
    }
  
?>