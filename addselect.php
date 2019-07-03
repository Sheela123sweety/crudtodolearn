<?php
include('dbconnect.php');

if(isset($_POST['submit'])) {
    
    $name = $_POST['name'];
    $mark = $_POST['marks'];
    $result = $_POST['result'];
    if ($name == null || $mark == null || $result == null)
    {
         echo "Validation Failed";
    }
     else
    {
        
    $sql = "INSERT INTO `users`(`name`, `marks`, `result`) VALUES ('$name', $mark, '$result')";
    $run_query = mysqli_query($conn , $sql);
      
       //select start
        if($run_query){
            echo "Success";


// start delete
$sql3 = "DELETE FROM users WHERE marks = 40";
$run_query3 = mysqli_query($conn , $sql3);

if($run_query3)
{
    echo "deleted successfully";
}
else {
    echo "delete failed";
}
//end delete

            $sql1="SELECT name FROM users";
            $run_query1 = mysqli_query($conn , $sql1);
            if ($run_query1->num_rows > 0) {
                // output data of each row
                while($row = $run_query1->fetch_assoc()) {
                    echo  $row["name"]. "<br>";
                }
            } else {
                echo "0 results";
            }
        }//end select
        else{
            echo "Failed";
        }   
    }
}
$conn->close();
?>


<!DOCTYPE HTML>
<html>
<body>
<h1>php form </h1>
<form method="POST" action="addselect.php">
Name:<input type="text" name="name"><br>
marks:<input type="number" name="marks"><br>
result:<input type="text" name="result"><br>
<input type="submit" name="submit">
</form>
</body>
</html>

