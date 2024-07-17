<?php
 
 session_start();
 $first_name = $last_name = "";

  if(empty($_SESSION['user'])){
    header('location:../html/login.php');
  }
  else{
    $user_data = $_SESSION['user'];
    $first_name = $user_data['first_name'];
    $last_name = $user_data['last_name'];
  }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile update</title>
    <link rel="stylesheet" href="../css/profile_update.css">
</head>
<body>
    <div class="container">
        <div class="wrapper">
        <form action="" id="update_form" enctype="multipart/form-data">
        <h2>update profile</h2>
            <div class='form_group'>
            <label for="first_name">First name</label>
            <input type="text" id="first_name" name="first_name" value =<?php echo $first_name ?>>
            </div>
            <div class='form_group'>
                <label for="last_name"> Last Name</label>
                <input type="text" id="last_name" name="last_name" value="<?php echo $last_name ?>">
            </div>
            <textarea name="bio" id="bio" placeholder="text your bio" rows="10" cols="50"></textarea>
             <div class='photo-upload'>
                <label class="flied_label">Profile</label>
                <input type="file" id="profile" name="profile" hidden>
                <label for="profile" class="img_select">Browse</label>
             </div>
             <div class='photo-upload'>
                <label class="flied_label">Cover</label>
                <input type="file" id="cover" name="cover" hidden>
                <label for="cover" class="img_select">Browse</label>
             </div>
              <button type="submit" class="submit_btn">submit</button>
        </form>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../js/profile_update.js"></script>
</body>
</html>