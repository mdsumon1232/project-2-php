<?php
   session_start();
   require('../php/config.php');

  if(!empty($_POST['email']) || !empty($_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $data_from_db = "SELECT * FROM user WHERE email = '$email'";

    $query = $conn -> query($data_from_db);

    if($query -> num_rows > 0){
        $user_data = mysqli_fetch_array($query);
        $user_password_in_db = $user_data['password'];
        $verify_password = password_verify($password, $user_password_in_db);

        $_SESSION['user'] = $user_data;

        if($verify_password){
            echo json_encode(["status" => "success", "message" => "Login successful"]);
        }
        else{
            echo json_encode(["status" => "error" , "message" => "invalid password"]);
        }


    }
    else{
        echo json_encode(["status" => "error" , "message" => "email not found"]);
    }

  }
  else{
    echo json_encode(["status" => "error" , "message" => "all flied are required"]);
  }
 



?>