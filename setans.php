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
$q = $_POST["q"];
$a = $_POST["a"];
$score=$_POST["sco"]; 
$roll=$_SESSION['roll'];
$q="SELECT * from answer where ans='$a'". "and qid='$q'";
  $result = mysqli_query($conn, $q);
$row = mysqli_fetch_array($result);
if(!empty($row))
{
  // echo $score;
  $score=$score+50;
  $query="UPDATE tbl_user set score=$score where roll=$roll";
  $result = mysqli_query($conn, $query);
  // echo "correct!! ";
  echo $score;
}
else{
$score=$score-10;
$query="UPDATE tbl_user set score=$score where roll=$roll";
$result = mysqli_query($conn, $query);
// echo "wrong!! ";
echo $score;
}

?>