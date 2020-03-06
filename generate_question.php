<?php
session_start();
$servername = "localhost";
$username ="anshika";
$password = "1234";
$dbname = "try";
$conn =  mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$val=$_POST['data'];
if($val=='start'){
$q=" SELECT start from tbl_user where roll=818";
$result = mysqli_query($conn, $q);
$row = mysqli_fetch_array($result);
echo $row['start'];
}
?>
