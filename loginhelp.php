<?php
$connection = mysqli_connect('localhost', 'root');

if ($connection) {
    echo "Connection is Establish!";
}
else {
    echo "ERROR Connection Failed!";
}

mysqli_select_db($connection, 'authentication');

// $firstname = $_POST['first_name'];
// $lastname = $_POST['last_name'];
$email = $_POST['email'];
$pass = $_POST['password'];

$email= stripcslashes($email);
$pass = stripcslashes($pass);
$email = mysqli_real_escape_string($connection,$email);
$pass = mysqli_real_escape_string($connection,$pass);


$query = "SELECT * FROM credentials WHERE EMAIL = '$email' AND PASSWD = '$pass'";

$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if ($count == 1) {
    header('location:loginsuccessful.php');
    
}
else {
    echo "Error while logging In";
    
    
 
}




?>