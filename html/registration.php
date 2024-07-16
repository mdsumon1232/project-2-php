<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup Form</title>
    <link rel="stylesheet" href="../css/form.css" />
    <!-- font awesome -->
    <script
      src="https://kit.fontawesome.com/db1fd23933.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
      <div class="form-header">
        <h3>User Registration</h3>
      </div>
      <div class="form-wrapper">
        <form action="" method="POST" id="signupForm" class="signup-form" >
          <div class="form-group">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName"  />
          </div>
          <div class="form-group">
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName"  />
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"  />
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <div class="password-input">
              <input
                type="password"
                id="password"
                name="password"
       
                autocomplete="off"
              />
              <span class="toggle-password" id="eye_open"> show </span>
              <span class="toggle-password" id="eye_close"> hidden </span>
            </div>
          </div>
          <div class="form-group">
            <label for="confirmPassword">Confirm Password:</label>
            <div class="password-input">
              <input
                type="password"
                id="confirmPassword"
                name="confirmPassword"
                autocomplete="off"
                
              />
              <span class="toggle-password" id="confirm-eye_open"> show </span>
              <span class="toggle-password" id="confirm-eye_close">
                hidden
              </span>
            </div>
          </div>

          <div>
            <p id="form_action_message"></p>
          </div>

          <button id="submit" >Sign Up</button>
          <p>have an account ? <a href="../html/login.php">login</a></p>
        </form>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../js/password_action.js"></script>
    <script src="../js/registration.js"></script>
  </body>
</html>
