
<?php
$servername = "localhost";
$username ="anshika";
$password = "1234";
$dbname = "try";
$conn =  mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

	$uid = $_GET['r'];

	$q="select ans from answer where id=$uid";
	
     $result=mysqli_query($GLOBALS['conn'],$q);
	 
     $row = mysqli_fetch_array($result);
echo $row['ans']; 

?>