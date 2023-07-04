<?php
error_reporting(0);
session_start();
$connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"online_notice_board");
  $name="";
  $email="";
  $password=""; 
  $query = "select * from admins where email = '$_SESSION[email]'";
  
    $query_run = mysqli_query($connection,$query);
    while($row=mysqli_fetch_assoc($query_run)){     
        $name=$row['name'];
        $email=$row['email'];
        $password=$row['password'];
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <from action="" method="post">
<div class="form-group">
        <label> Name:</label>
        <input type="text" class="form-control" name="name" value="<?php echo $name;?>">
      </div>
    <div class="form-group">
        <label>Email:</label>
        <input type="email" class="form-control" name="email" value="<?php echo $email;?>">
      </div>
    <div class="form-group">
        <label>Password:</label>
        <input type="password" class="form-control" name="password" value="<?php echo $password;?>">
      </div>
        <button class="btn btn-primary" type="submit" name="update_profile ">Update</button>
</form>
</body>
</html>
