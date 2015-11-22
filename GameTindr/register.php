<!DOCTYPE html>
<html>
  <head>
    <?php include("include/common.html"); ?>
    <link rel="stylesheet" type="text/css" name="register.css">
    <meta charset="utf-8">
    <title>Gamr</title>
  </head>
  <body>
      <?php include("include/header.html"); ?>
      <form id="register-form">
        <input name="username" placeholder="Username"><br>
        <input name="password" placeholder="Password"><br>
        <input name="confirm-password" placeholder="Confirm password"><br>
        <button type="button" class="btn-sm btn-default">Submit</button>
      </form>
      <?php include("include/footer.html"); ?>
  </body>
</html>
