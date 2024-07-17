<?php
    session_start();
   require('../html/header.php');
   
   if(empty($_SESSION['user'])){
    header('location: ../html/login.php');

   }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Profile Page</title>
    <link rel="stylesheet" href="../css/profile.css" />
  </head>
  <body>
    <div class="container"> 
        <div class="top_header">
          <div class="cover">
            <img src="" id="cover" alt="">
          </div>
          <div class="profile_img">
            <img src="" alt="" id="profile">
          </div>
       
        </div>
        <div class="profile_information">
             <h2 id="user_name"></h2>
             <p id="bio"></p>
            <a href="../html/profile_update.php">Edit profile</a>
          </div>
          <div>

          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
          <script src="../js/user.js"></script>
  </body>
</html>
