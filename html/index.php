<?php 
session_start();  

if(empty($_SESSION['user'])){
  header('location: ../html/login.php');
}

?>
<?php require('./header.php');  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Project-2</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/display_post.css">
  </head>
  <body>
    <div class="container">
      <div class="left_side">
        <div class="create_post">
          <div class="create_wrapper">
            <img src="../images/user.png" alt="" class="img">
            <input type="text" id="create_post_input" placeholder="write your mind...">
          </div>
        </div>
        <div class="posts" id="posts_container">
          
        </div>
      </div>
      <div class="right_side">
        <h1>right side</h1>
      </div>
    </div>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../js/display_data.js"></script>
    <script src="../js/create_post.js"></script>
  </body>
</html>
