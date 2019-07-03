<?php 
include('dbconnect.php');

if(isset($_POST['logout'])){

session_destroy();
session_unset();
header("refresh:0;url='login.php'");

}
?>

<!DOCTYPE html>
<html>
<body>

<h1> hi good evening <?php echo $_SESSION['username'] ?> </h1><br>
<button type="submit" name="logout"><b>Logout</b></button><br>


</body>
</html>