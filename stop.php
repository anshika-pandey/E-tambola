<?php

$servername = "localhost";
$username ="anshika";
$password = "1234";
$dbname = "try";
$conn =  mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$val=$_POST["data"];
// echo "hello";
$q=" insert into tbl_user(name,roll,pass,score,role,start) values ('admin','818','admin',0,'ADM','no')";
$result = mysqli_query($conn, $q);
echo "inserted";

?>
