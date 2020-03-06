<?php


$host = "localhost";
$user ="anshika";
$pass = "1234";
$db = "try";
$con=mysqli_connect($host,$user,$pass,$db);

if(!$con)
{
	print("Not Connected<br>".mysql_error());

}
else
{
	//echo("Connected");
}






?>