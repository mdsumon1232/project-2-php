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
        <form action="">
        <h2>update profile</h2>
            <div class='form_group'>
            <label for="first_name">First name</label>
            <input type="text" id="first_name" name="first_name">
            </div>
            <div class='form_group'>
                <label for="last_name"> Last Name</label>
                <input type="text" id="last_name" name="last_name">
            </div>
            <textarea name="bio" id="bio" placeholder="text your bio" rows="10" cols="50"></textarea>
             <div class='form_group'>
                <label >Profile</label>
                <input type="file" id="profile" hidden>
                <label for="profile">Browse</label>
             </div>
             <div class='form_group'>
                <label >Cover</label>
                <input type="file" id="cover" hidden>
                <label for="cover">Browse</label>
             </div>
              <button>submit</button>
        </form>
        </div>
    </div>
</body>
</html>