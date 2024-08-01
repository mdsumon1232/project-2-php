<?php
    require('../php/config.php');

    if(isset($_POST['id']) &&  isset($_POST['post']) || isset($_FILES['photo'])){
        $post_id = $_POST['id'];
        $post_article = $_POST['post'];
        $photo_name = $_FILES['photo']['name'];
        $photo_tmp_name = $_FILES['photo']['tmp_name'];

        if(empty($post_article) && empty($photo_name)){
            echo "Please! fill the flied";
        }  
        else{
            $update_post = "";

           if(isset($photo_name) && !empty($photo_name)){
            $image_folder = '../images/'.$photo_name;
            move_uploaded_file( $photo_tmp_name , $image_folder);

            $update_post = "UPDATE  post_data SET article = '$post_article' , image = '$image_folder' WHERE post_id = '$post_id' LIMIT 1";
           }
           else{
            $update_post = "UPDATE  post_data SET article = '$post_article' WHERE post_id = '$post_id' LIMIT 1";
           }

           $post_update_query = $conn -> query($update_post);
           if($post_update_query){
                echo "post update success";
           }
        }      
       

    }


?>