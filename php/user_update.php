<?php
    session_start();
    require('../php/config.php');

if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['bio']) && !empty($_FILES['profile']) && !empty($_FILES['cover'])){
    
   $user_id = $_SESSION['user']['user_id'];
   $first_name = $_POST['first_name'];
   $last_name = $_POST['last_name'];
   $bio = $_POST['bio'];
   $profile_name = $_FILES['profile']['name'];
   $profile_tmp_name = $_FILES['profile']['tmp_name'];
   $profile_folder = '../images/'.$profile_name;
   move_uploaded_file($profile_tmp_name , $profile_folder);
   $cover_name = $_FILES['cover']['name'];
   $cover_tmp_name = $_FILES['cover']['tmp_name'];
   $cover_folder = '../images/'.$cover_name;
   move_uploaded_file($cover_tmp_name , $cover_folder);

   if(strlen($bio) > 100){
    echo "Bio less then 100 character";
   }
   else{
      $update_data = "UPDATE  user SET first_name = '$first_name' , last_name = '$last_name' , bio = '$bio' ,
                     prorile_img = '$profile_folder' , cover_img ='$cover_folder' WHERE user_id = '$user_id' ";
     
      $update_data_query = $conn-> query($update_data);

      if($update_data_query){
        $select_user_data  = "SELECT * FROM user WHERE user_id = '$user_id'";
        $select_user_query = $conn -> query($select_user_data);
        $user_data = mysqli_fetch_array($select_user_query);
        $_SESSION['user'] = $user_data;
      }
      else{
        echo "something wrong";
      }

   }

}
else{
  echo "flied all the flied";
}

 

?>