<!DOCTYPE html>
<html>
<head>
  <title>Edit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
</head>
<body>

  <div class="container">
    <center><b>Register here</b></center>
    <?php
      include 'connection.php';
      if (isset($_GET['bid'])) {
        $id=$_GET['bid'];
        $sql="select * from booking where bid='$id'";
        $stmt=$pdo->query($sql);
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
        
      ?>
    <form method="POST"action="edithandler.php">


      <div class="form-group">
        <label for="middlename">Full name:</label>
        <input type="name" class="form-control" id="name" placeholder="Enter Fullname" name="fulname" value="<?php echo $row['fulname']?>">
      </div>

      <div class="form-group">
        <label for="addres">Address:</label>
        <input type="name" class="form-control" id="name" placeholder="Enter addres" name="address"value="<?php echo$row['address']?>">
      </div>

      <div class="form-group">
        <label for="phone">Phone No:</label>
        <input type="number" class="form-control" id="number" placeholder="Enter phone number" name="phone"value="<?php echo$row['phone']?>">
      </div>

      <div class="form-group">
        <label for="desc">Description:</label>
        <input type="name" class="form-control" id="name" placeholder="How do you feel" name="description"value="<?php echo$row['description']?>">
      </div>

      <div class="form-group">
        <label for="time">Time:</label>
        <input type="time" class="form-control" id="name" placeholder="Enter time" name="stime""value="<?php echo$row['stime']?>">
      </div>
      <div class="form-group">
      <label for="time">Time:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter time" name="bid"value="<?php echo$row['bid']?>">





      <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="remember"> Remember me
        </label>
      </div>
      <button type="submit" class="btn btn-primary" name="Update">Update</button>
      
    </form>
    <?php }?>
  </div>

</body>
</html>