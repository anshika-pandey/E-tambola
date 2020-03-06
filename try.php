<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body onload="myFunction()">
<?php
$servername = "localhost";
$username ="anshika";
$password = "1234";
$dbname = "try";
$conn =  mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


//$random = $_POST["id"];
//echo $random;

	$L = array(1, 2, 3, 4, 5);

function generate(id){
	$X = $GLOBALS['L'];
	$ind=rand(0,count($X));
$q="select value from answer where id=$id";
	
     $result=mysqli_query($GLOBALS['conn'],$q);
	 
$resultstring = $result->fetch_row()[0];
//echo $resultstring;
array_splice($GLOBALS['L'], $ind, 1); 
return var_dump($X);
}
?>
<table style="width:100%" id="myTable">
 
  <tr>
    <td>dk</td>
    <td>mdnjdkj</td>
    <td> </td>
	<td id='c'></td>
	<td></td>
	<td></td>
  </tr>
  <tr>
    <td>sdjs</td>
    <td>dj</td>
    <td></td>
	<td></td>
	<td></td>
	<td></td>
	
  </tr>
  <tr>
    <td>m</td>
    <td>h</td>
    <td>k</td>
	<td>f</td>
	<td>s</td>
	<td>d</td>
  </tr>
</table>
<button onclick="myFunction()">Try it</button>


<script>

function myFunction(){
	
for(var k=1;k<=5;k++){
var htmlString="<?php echo generate(k); ?>";
alert(htmlString);
var i=Math.floor(Math.random() * 3) ;
var j=Math.floor(Math.random() * 5) ;
var x=document.getElementById("myTable"); 
x.rows[i].cells[j].innerHTML=htmlString;
}
}
</script>
</body>
</html>