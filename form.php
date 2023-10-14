<?php

// Create connection
$conn = mysqli_connect("localhost","root","","contact");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$Name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$subject=$_REQUEST['subject'];
$Message=$_REQUEST['message'];
// $sql = "INSERT INTO 'form' VALUES('$name','$email','$subject','$message')";
$sql = "INSERT INTO `form` VALUES ('$Name', '$email', '$subject', '$Message')";

if(mysqli_query($conn, $sql)){
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>