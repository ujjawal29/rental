<?php
$username = filter_input(INPUT_POST, 'username');
$pass = filter_input(INPUT_POST, 'password');
$email = filter_input(INPUT_POST,'email');

if (!empty($username)){
if (!empty($pass)){
if (!empty($email)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "users";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO users (username, pass, email)
values ('$username','$pass','$email')";
if ($conn->query($sql)){
echo '<script>alert("New record is inserted sucessfully")</script>';
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
}
}
else{
echo '<script>alert("All fields are Required")</script>';
die();
}
?>