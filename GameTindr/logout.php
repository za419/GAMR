<?php
require_once("include/db_config.php");
$connection=mysqli_connect($CONFIG["host"],$CONFIG["username"],$CONFIG["password"],$CONFIG["dbname"]) or die('Could not log out');
$query=mysqli_prepare($connection, "DELETE FROM sessions WHERE session=?");
mysqli_stmt_bind_param($query, "i", $_SESSION['loginID']);
mysqli_stmt_execute($query);
mysqli_stmt_close($query);
mysqli_close($connection);
session_start();
session_destroy();
header("Location:index.php");
?>
