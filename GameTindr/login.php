<?php

session_start();
$username = $_POST['username'];
$password = $_POST['password'];


if ($username&&$password) {
  $connection=mysqli_connect("localhost","root","","users") or die("Error: Could not connect to server.");
  $query=mysqli_query($connection, "SELECT * FROM users WHERE username='$username'");
  $numrows=$query->num_rows;
  if ($numrows!=0) {
    while ($row=mysqli_fetch_assoc($query)) {
      $dbusername=$row['Username'];
      $dbpassword=$row['Password'];
    }
    if ($username==$dbusername&&md5($password)==$dbpassword) {
      $_SESSION['username']=$dbusername;
      header("Location:index.php");
    }else{
      echo("Incorrect username or password.");
    }
  }else{
    die("Incorrect username or password.");
  }
}else{
  die("Please enter a username and password.");
}

 ?>
