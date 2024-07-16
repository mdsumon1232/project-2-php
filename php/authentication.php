<?php
  require("../php/config.php");
  
 
  if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['password'])){
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $random_number = random_bytes(16);
  $verify_code = bin2hex($random_number);

  $check_email = "SELECT* FROM  user WHERE email = '$email'";
  $exit_query = $conn -> query($check_email);
  
  if($exit_query -> num_rows > 0){
    echo json_encode(["status" => "error", "message" => "Email already used"]);
  }
  else{
    $data_insert = "INSERT INTO user (first_name ,last_name ,email ,password )
    VALUES ('$first_name' , '$last_name' , '$email' , '$password' )  ";
    $query = $conn -> query($data_insert);
    if($query){
        echo json_encode(["status" => "success", "message" => "Registration successful"]);
   }
   else{
    echo json_encode(["status" => "error", "message" => "Registration failed"]);
   }  
  }
    

}




?>