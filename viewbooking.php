<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Booking</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
</head>
<body>





<div class="menu">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="gallary.php">Gallary</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="viewbooking.php">viewbooking</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="doctinfo.php">Doctor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php"><b>Login</b></a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="logout.php"><b>Log Out</b></a>
      </li>    
    </ul>
 
  </div>  
</nav>
</div>



<div class="col-sm-9">

         <?php
include("connection.php");
?>
              
                <table border="1"id="example" class="display" cellspacing="0" width="100%">
          <thead>
            <tr>
             <center> <h3>View Booking</h3></center>
              <th>bid</th><th>did</th><th>Fullname</th><th>Address</th><th>phone</th><th>description</th><th>stime</th><th>EDIT</th><th>DELETE</th>
            </tr>
          </thead>


            <?php 
    $sql="SELECT * FROM booking";
    $stmt=$pdo->query($sql);

    while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
    echo "<tr><td>";
    echo(htmlentities($row['bid']));
    echo("</td><td>");
    
    echo(htmlentities($row['did']));
    echo("</td><td>");
    
    echo(htmlentities($row['fulname']));
    echo("</td><td>");
    echo (htmlentities($row['address']));
    echo("</td><td>");
    echo (htmlentities($row['phone']));
    echo("</td><td>");
    echo (htmlentities($row['description']));
    echo("</td><td>");
    echo (htmlentities($row['stime']));
    echo("</td><td>");

    echo('<a href="editbooking.php?bid='.$row['bid'].'"> <b> Edit </b> </a>');
    echo("</td><td>");

    echo('<a href="deletebooking.php?bid='.$row['bid'].'"> <b> delete </b> </a>');
    echo("</td><td>");
  
  
    }
 ?>  
        </table>