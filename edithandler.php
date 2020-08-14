

<?php
include("connection.php");
session_start();
if(isset($_POST['Update'])){
    $fulname=$_POST['fulname'];
     $address=$_POST['address'];
     $phone=$_POST['phone'];
       $description=$_POST['description'];
        $stime=$_POST['stime'];
        $bid=$_POST['bid'];

   $sql = "UPDATE booking SET fulname=:fulname,address=:address,phone=:phone,description=:description,stime=:stime  WHERE bid=:bid";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':fulname' =>$fulname,
        ':address' => $address,
        ':phone' => $phone,
        ':description' => $description,
        ':stime' => $stime,
        ':bid' => $bid));
    $_SESSION['success'] = 'Record updated';
    header( 'Location:viewbooking.php' );
}
 
?>