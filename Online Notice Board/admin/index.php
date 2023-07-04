<?php
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"online_notice_board");
  if(isset($_POST['login'])){
    $query = "select * from admins where email = '".$_POST['email']."' AND password='".$_POST['password']."'";
    echo $_POST['email'];
    echo $_POST['password'];
    $query_run = mysqli_query($connection,$query);
    if(mysqli_num_rows($query_run)>0){
     while($row = mysqli_fetch_assoc($query_run)){
        echo "<script>
        window.location.href = 'admin_dashbord.php';
        </script>";
     }
     
    }
    else{
      echo "<script>alert('Please Enter correct email id and password');

      </script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Online Notice Board System</title>
    <!-- Bootstrap files -->
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
    <script src="../bootstrap-4.4.1/js/bootstrap.min.js" charset="utf-8"></script>
    <!-- CSS File -->
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <!-- Header section code start here  -->
    <div class="row" id="header">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
        <h3>Online Notice Board System</h3>
      </div>
      <div class="col-md-4">
      </div>
    </div>

    <!-- Login from code starts here -->
    <section id="login_form">
      <div class="row">
        <div class="col-md-4 m-auto block">
          <center><h4>Admin Login form</h4></center>
          <form action="" method="post"> 
            <div class="form-group">
              <lable>Email ID:</label>
                <input class="form-control" type="email" name="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
              <lable>Passowrd:</label>
                <input class="form-control" type="password" name="password" placeholder="Enter your Password">
            </div>
          
            <button class="btn btn-primary" type="submit" name="login">Login</button>
          </form>
          <a href="register.php">Click here to Register</a>
        </div>
      </div>
    </section>
  </body>
</html>
