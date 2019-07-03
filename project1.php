<?php
include('dbconnect.php');

if(isset($_POST['submit'])) {
    
    $username1 = $_POST['username1'];
    $name = $_POST['name'];
    $email= $_POST['email'];
    $number= $_POST['number'];
    $password1= $_POST['password1'];
    $password2=$_POST['password2'];

    if ($name == null || $username1 == null || $email == null || $number == null|| $password1 == null || $password2 == null)
    {
         echo "Validation Failed";
    }
     else
    { 
        if($password1 == $password2){
            $sql = "INSERT INTO `p1db`(`username`, `name`, `email`,`mobilenumber`)
                    VALUES ('$username1','$name','$email','$number' )";
            $run_query = mysqli_query($conn , $sql);
      
       
        if($run_query){
            echo "Success";
            echo "login details recorded successfully.";
        }
        }
        else{
            echo "password doesnot match";

        }
    
}
}
$conn->close();
?>










<!DOCTYPE HTML>
<html>
<body>
<h1>registration form </h1>
<form method="POST" action="project1.php">
Username:<input type="text" name="username1"><br>
Name:<input type="text" name="name"><br>
email:<input type="text" name="email"><br>
mobilenumber:<input type="number" name="number"><br>
Password:<input type="password" name="password1"><br>
confirmPassword:<input type="password" name="password2"><br>
register<input type="submit" name="submit">
</form>
</body>
</html>

