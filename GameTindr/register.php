<!DOCTYPE html>
<html>
  <head>
    <?php include("include/common.html"); ?>
    <link rel="stylesheet" type="text/css" href="styles/register.css">
    <meta charset="utf-8">
    <title>Gamr</title>
  </head>
  <body>
      <?php include("include/header.html"); ?>
      <form id="registerForm">
          <input type="text" name="username" placeholder="Username"><br>
          <input type="password" name="password" placeholder="Password"><br>
          <input type="password" name="confirm-password" placeholder="Confirm password"><br>
          <input type="submit">
      </form>
      <?php include("include/footer.html"); ?>
  </body>
</html>
