<?php
session_start();
if(isset($_POST['update_profile'])){
    $connection =mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"online_notice_board");
    $query = "update admins set
    name='$_POST[name]',email='$_POST[email]',password='$_POST[password]'";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
        echo"<script type='text/javascript'>
        alert('Profile updated Succesfully....');
        window.location.href = 'admin_dashbord.php'
        </script>";
    }
    else{
            echo"<script type='text/javascript'>
            alert('Can't udate try again....');
            window.location.href = 'admin_dashbord.php'
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
    <!-- jQuery file -->
    <script src="../jQuery/juqery_latest.js" charset="utf-8"></script>
    <script type="../text/javascript">
    $(document).ready(function(){
        $("#edit_profile_botton").click(function(){
        $("#main_content").load('edit_profile.php');
    });
    });
    </script>
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
<br>
    <!-- Userdashbord from code starts here -->
   <section id="container"> 
    <div class="row">
        <div class="col-md-2" id="left_sidebar">
            <img src="../images/avtar.jpeg" class="img-rounded" width="200px" hight="200px">
            <button class="btn btn-primary btn-block" id="edit_profile_botton">Edit Profile</button>
            <button class="btn btn-secondary btn-block" id="create_notice_botton">Create Notice</button>
            <button class="btn btn-warning btn-block" id="view_notices_botton">View All Notices</button>
            <button class="btn btn-secondary btn-block" id="view_replies_botton">View Replies</button>
            <a href="index.php" class="btn btn-success btn-block">Logout</a>
        </div>
     <div class="col-md-8" id="main_content">
     <h1>Welcome to Admin Dashbord</h1>
        <p>
            This is the admin dashbord page. Here admin can manage notice board system. he can create a Notices
            , delete a notice and all the replies of the notice. 
        </p>
        <p>
            This is the admin dashbord page. Here admin can manage notice board system. he can create a Notices
            , delete a notice and all the replies of the notice. 
        </p>
        <p>
            This is the admin dashbord page. Here admin can manage notice board system. he can create a Notices
            , delete a notice and all the replies of the notice. 
        </p>
        </div>
    </div>