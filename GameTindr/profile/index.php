<?php
  require("../include/db_config.php");
  session_start();
  $uid=$_SESSION['loginID'];
  $connection=mysqli_connect($CONFIG["host"],$CONFIG["username"],$CONFIG["password"],$CONFIG['dbname']) or die("Could not connect to the server.");
  $query=mysqli_query($connection,"SELECT * FROM users WHERE UID='$uid'");
  while($row=mysqli_fetch_array($query)){
    $username=$row['username'];
    $email=$row['email'];
    $fname=$row['firstname'];
    $lname=$row['lastname'];
    $about=$row['about'];
  }



?>
<html>
  <head>
    <?php include("../include/common.html"); ?>
    <link rel="stylesheet" type="text/css" href="../styles/profile.css">
    <meta name="apple-mobile-web-app-title" content="GAMR Profile">
    <meta name="og:title" content="GAMR Profile">
    <title>GAMR Profile</title>
  </head>
  <body>
      <?php include("../include/header.php"); ?>
      <div id="userProfile">
        <img id="userPhoto" src="../images/example-profile.png" width="200px" height="200px">
          &nbsp;
          <fieldset id="userInfo">
            <li>Username: <span><?php echo($username);?></span></p>
            <li>Email: <span><?php echo($email);?></span></p>
            <li>First Name: <span>
              <?php if (isset($fname)) {
                      echo($fname);
                    } else {
                      echo("You have not set a first name.");
                    }?>
            </span></p>
            <li>Last Name: <span>
              <?php if (isset($lname)) {
                      echo($lname);
                    } else {
                      echo("You have not set a last name.");
                    }?>
            </span></p>
            <li>About Me: <span style="white-space:normal !important">
              <?php if (isset($about)) {
                      echo($about);
                    } else {
                      echo("You have not set an about me.");
                    }?>
            </span></li>
          </fields>
      </div>
      <?php include("../include/footer.html"); ?>
  </body>
</html>
