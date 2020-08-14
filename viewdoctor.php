<!DOCTYPE html>
<html lang="en">
<head>
  <title>View doctor</title>
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
        <a class="nav-link" href="bookin.php">Booking</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="viewdoctor.php">view doctor</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="login.php"><b>Login</b></a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Log Out</b></a>
      </li>    
    </ul>
 
  </div>  
</nav>
</div>



<div class="col-sm-9">

         <?php
include("connection.php");
?>
              
                <table id="example" class="display" cellspacing="0" width="100%" border="3">
          <thead>
            <tr>
             <center> <h3>View doctor</h3></center>
              <th>dname</th><th>address</th><th>phone</th><th>email</th><th>disease</th><th>dates</th><th>stime</th><th>etime</th>
            </tr>
          </thead>


            <?php 
    $sql="SELECT * FROM doctor ";
    $stmt=$pdo->query($sql);

    while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
    echo "<tr><td>";
    echo(htmlentities($row['dname']));
    echo("</td><td>");
    echo (htmlentities($row['address']));
    echo("</td><td>");
    echo (htmlentities($row['phone']));
    echo("</td><td>");
    echo (htmlentities($row['email']));
    echo("</td><td>");
    echo (htmlentities($row['disease']));
    echo("</td><td>");
    echo (htmlentities($row['dates']));
    echo("</td><td>");
    echo (htmlentities($row['stime']));
    echo("</td><td>");
    echo (htmlentities($row['etime']));
    echo("</td><td>");
  
    


    
    
  
    }
 ?>  
        </table>