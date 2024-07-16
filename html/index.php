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
        <input type="text" id="create_post_input" placeholder="writer your mind...">
        </div>
      </div>
     <div class="posts">
            <div class="post">
              <div class="post_header">
                <div class="profile_info">
                  <div class="profile_img">
                    <img src="../images/user.png" alt="user" />
                  </div>
                  <div class="porfile_name">
                    <p>Md.Sumon</p>
                    <p class="post_date">10:30PM , 10-11-2024</p>
                  </div>
                </div>
                <div class="post_action">
                  <span id="postAction"><i class="fa-solid fa-ellipsis-vertical"></i></span>
                  <ul class="action_list" id="post_action_list">
                    <li><a href="">Edit</a></li>
                    <li><a href="">Delete</a></li>
                  </ul>
                </div>
              </div>
              <div class="mind_test">
                <p>this is demo post</p>
              </div>
              <div class="post_image">
                <img src="../images/post.jpg" alt="post photo" />
              </div>
              <div class="comments">
                <div class="comment">
                  
                    <img src="../images/user.png" alt="" />
                    <div class="comment-text">
                     <div>
                      <p>this is demo comment . this is demo comment . </p>
                      <p class="comment_time">10th jun 2024</p>
                     </div>
                     <span id="comment_action_dot"><i class="fa-solid fa-ellipsis-vertical comment_dot"></i></span>
                     <ul  id="comment_action">
                      <li><a href="">Edit</a></li>
                      <li><a href="">Delete</a></li>
                    </ul>
                </div>
              </div>
            </div>
          </div>
     </div>
</div>
     <div class="right_side"><h1>right side</h1></div>
    </div>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../js/create_post.js"></script>
  </body>
</html>
