<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "to-do-list";

//Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

//Check connection
if ($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}

//Insert values into the database

mysqli_select_db($conn,"to-do-list");
$sql = "INSERT INTO user(fname,lname,email,mob_number,gender,birthday,address,city) VALUES('$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[mobile]','$_POST[gender]','$_POST[dob]','$_POST[address]','$_POST[city]')";
if(!mysqli_query($conn,$sql))
{
    die("error".mysqli_error($conn));
  
}
else
{
	 echo "<div style='margin:20% 30%;'><h4>New record Created successfully</h4></div>";
         header('Refresh:8; URL=form.php');
}








$conn->close();
?>