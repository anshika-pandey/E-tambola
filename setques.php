
<?php
$servername = "localhost";
$username ="anshika";
$password = "1234";
$dbname = "try";
$conn =  mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$u = $_POST["data"]; 
// echo $u;
$q="SELECT * from answer where qid  = '$u'";
$result = mysqli_query($conn, $q);
$row = mysqli_fetch_array($result);
	 
//$resultstring = $result->fetch_row()[0];
echo $row['qid'];
echo " ";
echo $row['ques'];


?>