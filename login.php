
<?php
include('dbconnect.php');
if(isset($_POST['login'])){

$email = $_POST['email']; 
$password3 = $_POST['password'];

$sql4 = "SELECT * FROM `p1db` WHERE email = '$email' ";
$run_query1 = mysqli_query($conn , $sql4);

$row = mysqli_fetch_assoc($run_query1);
$count = count($run_query1);

if($count <= 0){
    echo "user not found";
}
else{
    $password4 = md5($password3);
   // echo $row[password];
    if($row[password] == $password4)
    {
        echo "login successsfull";
        
        $_SESSION['name'] = $row[name];
        $_SESSION['username'] = $row[username];
        $_SESSION['email'] = $row[email];
        $_SESSION['mobilenumber'] = $row[mobilenumber];
        $_SESSION['password'] = $row[password];

        header('location:Stdhome.php');
    }
    else{
        echo "wrong password";
    }
}

}
?>


<!DOCTYPE HTML>
<html>
<body>
<center>
<h2>User Login </h2>
<form method="POST" action="login.php">
<b>Email &nbsp;&nbsp;</b><input type="text" name="email"><br><br>
<b>Password &nbsp;&nbsp;</b><input type="password" name="password"><br><br>
<button type="submit" name="login">&nbsp; Login &nbsp;</button>
</form>
</center>

</body>
</html>