<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login Form</title>
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
        <h3>User Login</h3>
      </div>
      <div class="form-wrapper">
        <form id="login" class="signup-form">
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required />
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <div class="password-input">
              <input
                type="password"
                id="password"
                name="password"
                required
                autocomplete="off"
              />
              <span class="toggle-password" id="eye_open"> show </span>
              <span class="toggle-password" id="eye_close"> hidden </span>
            </div>
          </div>
           <div><p id="login_message"></p></div>
          <button type="submit">Login</button>
          <p>
            No account ? <a href="../html/registration.php">create account</a>
          </p>
        </form>
      </div>
    </div>
     
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../js/login.js"></script>
    <script src="../js/password_action.js"></script>
  </body>
</html>
