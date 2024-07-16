<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="../css/header.css" />
    <!-- font awesome -->
    <script
      src="https://kit.fontawesome.com/db1fd23933.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <header>
      <div class="logo">MyLogo</div>
      <nav class="nav-links" id="navLinks">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Report</a></li>
          <li>
            <form action="#" class="search-box">
              <input type="text" placeholder="Search..." />
              <button type="submit" class="search_btn">
                <i class="fa fa-search"></i>
              </button>
            </form>
          </li>
          <li class="dropdown">
            <a href="javascript:void(0);" class="dropbtn">Profile</a>
            <div class="dropdown-content">
              <a href="./profile.php">Profile</a>
              <a href="#">Settings</a>
              <a href="../php/log_out.php">Log Out</a>
            </div>
          </li>
        </ul>
      </nav>
      <a href="javascript:void(0);" class="icon" onclick="toggleMenu()">
        <i class="fa-solid fa-bars"></i>
      </a>
    </header>

    <script src="../js/menu.js"></script>
  </body>
</html>
