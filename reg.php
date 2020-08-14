<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration Form</title>
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
        <a class="nav-link" href="login.php"><b>Login</b></a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="logout.php"><b>Log Out</b></a>
      </li>    
    </ul>
 
  </div>  
</nav>
</div>

<div class="container">
  <center><b>Register here</b></center>
  <form method="POST" action="registerHandler.php">
    
    <div class="form-group">
      <label for="middlename">Full name:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter Fullname" name="pname">

      <input hidden="" type="text" class="form-control" id="name" placeholder="Enter Fullname" name="did" value="">
    </div>
    <div class="form-group">
      <label for="addres">Address:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter addres" name="address">
    </div>

     <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="phone">Phone No:</label>
      <input type="number" class="form-control" id="number" placeholder="Enter phone number" name="phone">

      <input hidden="" type="text" class="form-control" id="name" placeholder="Enter Fullname" name="bid" value="">
    </div>
    
    <div class="form-group">
      <label for="user">User:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter Username" name="user">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>
</div>

</body>

<!-- Mirrored from www.w3schools.com/bootstrap4/tryit.asp?filename=trybs_form_basic&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Jan 2019 00:11:12 GMT -->
</html>
