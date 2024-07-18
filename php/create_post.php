<?php
 session_start();
 require('../php/config.php');

if(isset($_POST['post']) || isset($_FILES['photo'])){

  $user_id = $_SESSION['user']['user_id'];
  if(strlen($_POST['post']) > 500){
    echo "post content must be less than 500 character";
  }
  else{
    $article = $_POST['post'];
  $photo_name = $_FILES['photo']['name'];
  $photo_tmp_name = $_FILES['photo']['tmp_name'];
  $photo_folder = '../images/'. $photo_name;
  move_uploaded_file($photo_tmp_name , $photo_folder);


  $insert_post_data ="INSERT INTO post_data (article , image , user_id)
                      VALUES ('$article' , '$photo_folder' , '$user_id') ";
  
  $insert_post_data_query = $conn -> query($insert_post_data);
  if($insert_post_data_query){
    
             echo json_encode(["status" => "success", "message" => "post successful"]);
  }
    else{
      echo json_encode(["status" => "error" , "message" => "post not done"]);
    }

  }

}
else{
  echo json_encode(["status" => "error" , "message" => "No content to post"]);
}

 
  

?>