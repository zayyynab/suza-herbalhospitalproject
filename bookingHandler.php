<?php 

  include 'connection.php';

  if (isset($_POST['submit'])){
    $fulname = $_POST['fulname'];
     $did = $_POST['did']; 
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $description = $_POST['description'];
    $stime = $_POST['stime'];
    
    $sql = "INSERT INTO booking (fulname, address, phone, description, stime,did)
    VALUES (:fulname,:address,:phone,:description,:stime,:did)";

    $stmt = $pdo->prepare($sql);
    $stmt = $stmt->execute(
      array(
        ':fulname' => $fulname,
        ':address' => $address,
        ':phone' => $phone,
        ':description' => $description,
        ':stime' => $stime,
        ':did' => $did,
         ));
      header('location:viewbooking.php');
    }
  
?>