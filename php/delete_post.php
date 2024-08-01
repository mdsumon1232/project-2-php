<?php
    require('../php/config.php');

   if(isset($_POST['id'])){
    $post_id = $_POST['id'];
     $delete_post = "DELETE FROM post_data WHERE post_id = '$post_id' LIMIT 1";
     $delete_query = $conn -> query($delete_post);
     if($delete_query){
        echo "post delete successful";
     }
     else{
        echo "something wrong";
     }
   }

?>