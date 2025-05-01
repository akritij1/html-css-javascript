<?php
$conn= mysqli_connect('localhost','root');

mysqli_select_db($conn,"contact");

$user=$_POST['user'];
$email=$_POST['email'];
$message=$_POST['message'];

// $query = "INSERT INTO 'userinfodata'('user','email','message') VALUES('$user','$email','$message')";
// $query = "INSERT INTO `userinfodata` (`id`, `user`, `email`, `message`) VALUES ( '$user', '$email', '$message')";
$query = "INSERT INTO `userinfodata` (`user`, `email`, `message`) VALUES ('$user', '$email', '$message')";


mysqli_query($conn,$query);

echo "User: ";
echo $_POST["user"];
echo "<br>";

echo "Email: ";
echo $_POST["email"];
echo "<br>";

echo "Message: ";
echo $_POST["message"];
echo "<br>";

// Add message indicating the message is sent
echo "Message is sent.";

?>