<?php
require('../php/config.php');

$select_data = "SELECT post_data.* , user.first_name , user.last_name ,
user.prorile_img FROM post_data INNER JOIN user ON post_data.user_id = user.user_id";

$select_data_query = $conn -> query($select_data);

$post = array();

while($fetch_data = mysqli_fetch_array($select_data_query)){
 $post[] = $fetch_data;
}

header('Content-Type: application/json');
 echo json_encode($post);
?>