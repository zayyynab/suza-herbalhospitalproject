<?php
include("connection.php");
session_start();

if (isset($_GET['bid'])){
    $sql = "DELETE FROM booking WHERE bid = :bid";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(':bid'=> $_GET['bid']));
    $_SESSION['success'] = 'Successful delete';
    header("location:viewbooking.php" ) ;
    
}
?>