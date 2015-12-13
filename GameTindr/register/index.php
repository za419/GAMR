<!DOCTYPE html>
<html>
<head>
  <?php include("include/common.html"); ?>
  <link rel="stylesheet" type="text/css" href="../styles/register.css">
  <meta name="apple-mobile-web-app-title" content="Register for GAMR">
  <meta name="og:title" content="Register for GAMR">
  <title>Register for GAMR</title>
</head>
<body>
  <?php include("../include/header.php"); ?>
  <h1 id="title">Thank you for choosing <span class="gamr">GAMR</span></h1>
  <br>
  <p class="info" style="text-align:center !important">
    We'll just need a little bit of information from you to optimize your experience.
  </p>
  <br>
  <form id="registerForm">
    <div>
      <label for="username">Username</label>
      <input type="text" id="username" name="username" placeholder="Username"/><br>
    </div>
    <div>
      <label for="password">Password</label>
      <input type="password" id="password"name="password" placeholder="Password"/><br>
    </div>
    <div>
      <label for="confirm-password">Confirm Password</label>
      <input type="password" id="confirm-password" name="confirm-password"
      placeholder="Confirm Password"/><br>
    </div>
    <div>
      <label for="email">Email</label>
      <input type="text" id="email" name="email" placeholder="Email"><br>
    </div>
    <div>
      <label for="confirm-email">Confirm Email</label>
      <input type="text" id="confirm-email" name="confirm-email"
      placeholder="Confirm Email"/><br><br>
      <div>
        <input type="submit" id="submit">
      </div>
    </div>
  </form>
  <?php include("../include/footer.html"); ?>
</body>
</html>
