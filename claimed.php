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


	if(isset($_SESSION['roll']))
    $roll=$_SESSION['roll'];
$score = $_POST["data"];
$q="UPDATE tbl_user set score=$score where roll=$roll";

$result = mysqli_query($conn, $q);
$query="update tbl_user set claimed=1 where roll=$roll";
$res = mysqli_query($conn, $query);
//echo $q;
session_destroy();

?>