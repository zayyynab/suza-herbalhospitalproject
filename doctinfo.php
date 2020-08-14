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


<script>
  function validat(){

    
    if (document.form1.dname.value == "") {

      alert("pelease enter your fullname");
      document.form1.dname.focus();
      return false;
    }
    
    if (document.form1.phone.value == "" || document.form1.phone.value.length>10 || document.form1.phone.value.length<10 ){

      alert("pelease enter your phone number shuld be ten digt ");
      document.form1.phone.focus();
      return false;
    
    }
    if (document.form1.email.value == "") {

      alert("pelease enter email");
      document.form1.email.focus();
      return false;
    }
    if (document.form1.address.value == "") {

      alert("pelease enter your adress ");
      document.form1.address.focus();
      return false;
    }
    if (document.form1.disease.value == "") {

      alert("pelease enter what type of disease you treat for ");
      document.form1.disease.focus();
      return false;
    }
    if (document.form1.dates.value == "") {

      alert("pelease enter the date that you found ");
      document.form1.dates.focus();
      return false;
    }
    if (document.form1.stime.value == "") {

      alert("pelease enter the starting time ");
      document.form1.stime.focus();
      return false;
    }
    if (document.form1.etime.value =="") {

      alert("pelease enter end time ");
      document.form1.etime.focus();
      return false;

    }
    return (true);
 }
</script>
}

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

<div class="container">
  <center><b>Register here</b></center>


  <form method="POST" action="doctorHandler.php" name="form1" onsubmit=" return validat();">
    
    <div class="form-group">
      <label for="middlename">Full name:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter fullname" name="dname">
    </div>
    <div class="form-group">
      <label for="addres">Address:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter addres" name="address">
    </div>
    <div class="form-group">
      <label for="phone">Phone No:</label>
      <input type="text" class="form-control" id="number" placeholder="Enter phone number" name="phone">
    </div>
     <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>  
<div class="form-group">
      <label for="disease">Disease:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter disease" name="disease">
    </div>
    <div class="form-group">
      <label for="date">Date:</label>
      <input type="date" class="form-control" id="name" placeholder="Enter date" name="dates">
    </div>
    <div class="form-group">
      <label for="stime">Starting Time:</label>
      <input type="time" class="form-control" id="name" placeholder="Enter start time" name="stime">
    </div>
    <div class="form-group">
      <label for="etime">Ending Time:</label>
      <input type="time" class="form-control" id="name" placeholder="Enter end time" name="etime">
    </div>
    <div class="form-group">
      <label for="stime">username:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter start time" name="user">
    </div>
    <div class="form-group">
      <label for="etime">password:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter end time" name="pass">
    </div>
    
    
    
    


    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>

<!-- Mirrored from www.w3schools.com/bootstrap4/tryit.asp?filename=trybs_form_basic&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Jan 2019 00:11:12 GMT -->
</html>
