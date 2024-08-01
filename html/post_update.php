<?php 

    require('../php/config.php');
    require('../html/header.php'); 

$post_article = $post_id ="";

if(isset($_GET['id'])){
  $post_id = $_GET['id'];
  
  $select_updated_data = "SELECT * FROM post_data WHERE post_id = '$post_id'";
  $select_data_query = $conn -> query($select_updated_data);
  $post_data = mysqli_fetch_array($select_data_query);
  $post_article = $post_data['article'];
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>post update</title>
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
                 <textarea name="post"  id="post"  placeholder="write your mind"><?php echo isset($post_article) ? $post_article : ""  ?></textarea>
                    <input type="text" name="id" value="<?php echo $post_id ?>" hidden>
                 <div class="image_upload">
                 <label for="photo" class="photo_upload">
                  Image
                      </label>
                      <input type="file" name="photo" id="photo" hidden />
                   </div>
                   <input type="submit" id="submit" name="submit" value="post" />
          </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../js/post_update.js"></script>

  </body>
</html>
