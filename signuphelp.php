<?php
$connection = mysqli_connect('localhost','root');



mysqli_select_db($connection, 'authentication');

$firstname = $_POST['first_name'];
$second_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];

$data = "INSERT INTO credentials (FNAME, LNAME, EMAIL, PASSWD) VALUES ('$firstname', '$second_name', '$email', '$password')";

mysqli_query($connection,$data);
header('location:signupsuccessful.php')

?>