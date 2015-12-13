<?php
    //TODO Add email checking.
    session_start();
    $username=$_POST['username'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirm-password'];
    $email=$_POST['email'];
    $confirmemail=$_POST['confirm-email'];

    if ($confirmpassword!=$password){
      echo('Passwords do not match.');
    }elseif ($confirmemail!=$email){
      echo('Emails do not match.');
    }elseif (strlen($password)>32||strlen($password)<6){
      echo('Password must be between 6 and 32 characters.');
    }elseif (strlen($username)>65||strlen($username)<3){
      echo('Username must be between 3 and 65 characters.');
    }else{
      $password=md5($password);
      $connection=mysqli_connect("localhost","root","","users") or die("Could not connect to the server.");
      $query=mysqli_query($connection,"
        INSERT INTO users VALUES ('','$username','$password','$email')
      ");
      header('Location:/about/');
    }
?>
