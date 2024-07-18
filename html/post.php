<?php  require('../html/header.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>post</title>
    <!-- font awesome -->
    <script
      src="https://kit.fontawesome.com/db1fd23933.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../css/post.css" />
  </head>
  <body>
    <div class="container">
        <div class="post">
           <div class="post_header">
               <div class="profile_info">
                  <div class="profile_img">
                  <img src="../images/user.png" alt="user" />
              </div>
            <div class="porfile_name">
              <p>Md.Sumon</p>
            </div>
          </div>
        </div>
           <form action="" class="post_form" id="create_post" enctype="multipart/form-data">
               <div class="image_upload">
                 <label for="photo" class="photo_upload">
                  <i class="fa-solid fa-images"></i>
                      </label>
                      <input type="file" name="photo" id="photo" hidden />
                   </div>
                 <textarea name="post"  id="post"  placeholder="write your mind"></textarea>
              <input type="submit" id="submit" name="submit" value="post" />
          </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../js/post.js"></script>

  </body>
</html>
