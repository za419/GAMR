<!DOCTYPE html>
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
          <ul id="userInfo">
            <li>Username: <span>Murf</span></p>
            <li>Email: <span>murphycangelo@gmail.com</span></p>
            <li>First Name: <span>Murphy</span></p>
            <li>Last Name: <span>Angelo</span></p>
            <li>About Me: <span style="white-space:normal !important">My favorite emoji is the ghost emoji.
            I also like singing, dancing, and trains.</span></li>
          </ul>
      </div>
      <?php include("../include/footer.html"); ?>
  </body>
</html>
