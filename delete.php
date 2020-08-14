<?php
include("connection.php");
session_start();

if (isset($_GET['ID'])){
    $sql = "DELETE FROM school WHERE SCHOOL_ID = :SCHOOL_ID";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array(':SCHOOL_ID'=> $_GET['ID']));
    $_SESSION['success'] = 'Successful delete';
    header("location:manage_school.php" ) ;
    
}
?>