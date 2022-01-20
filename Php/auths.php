<?php
$connection=mysqli_connect("localhost","root","","sign_in");
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'sign_in');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
echo "Database connection has been successfull!!";
session_start();
if (isset($_POST['user']) and isset($_POST['mno'])){
$username = $_POST['user'];
$mno = $_POST['mno'];
$query = "SELECT * FROM sign WHERE email='$username' and mno='$mno'";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
if ($count == 1){
$_SESSION['Email'] = $username;
     echo "successfully login!";
}
else{
echo "Invalid Login Credentials.";
}
}
if (isset($_SESSION['email'])){
$username = $_SESSION['email'];
}
?>