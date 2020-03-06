
<?php
$servername = "localhost";
$username ="anshika";
$password = "1234";
$dbname = "try";
$conn =  mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

	$uid = $_GET['s'];
    //alert($uid);
    //echo $uid;
	$q="select id from answer where value=$uid";
	
     $result=mysqli_query($GLOBALS['conn'],$q);
	 
$resultstring = $result->fetch_row()[0];
echo $resultstring; 

?>