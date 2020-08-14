<?php 

  include 'connection.php';

  if (isset($_POST['submit'])){
    $name = $_POST['dname']; 
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $disease = $_POST['disease'];
    $dates = $_POST['dates'];
    $stime = $_POST['stime'];
    $etime = $_POST['etime'];
     $user = $_POST['user'];
    $pass = $_POST['pass'];


    $sql = "INSERT INTO doctor( dname, address, phone, email, disease, dates, stime, etime, user,pass)
    VALUES (:dname,:address,:phone,:email,:disease,:dates,:stime,:etime,:user,:pass)";

    $stmt = $pdo->prepare($sql);
    $insert = $stmt->execute(
      array(
        ':dname' => $name,
        ':address' => $address,
        ':phone' => $phone,
        ':email' => $email,
        ':disease' => $disease,
        ':dates' => $dates,
        ':stime' => $stime,
        ':etime' => $etime,
        ':user' => $user,
        ':pass' => $pass,
      )
    );
      header('location:doctinfo.php?insert');
    }
  
?>