<?php

session_start();

require_once("config.php");

$roll=$_REQUEST['unumber'];
$pwd=$_REQUEST['pwd'];
$qno=1;
//$pw=md5($pw);


$lq="SELECT * FROM `tbl_user` WHERE roll='$roll' AND pass='$pwd'";

$sq=mysqli_query($con,$lq);

$row=mysqli_fetch_array($sq);
$_SESSION['role']=$row['role'];


//$result=mysqli_query($con,$q);

//$row1=mysqli_fetch_array($result);

if(!empty($row))
{
	if($row['role']=="ADM"){
		
	header("Location: admin.php");

	}

	else if($roll==$row['roll'] && $row['pass']==$pwd)
	{
		if($row['claimed']==0)
		{
       
   //    $_SESSION=array();

        $_SESSION['roll']=$row[roll];
		$_SESSION['pwd']=$row[pass];
		$_SESSION['name']=$_row[name];
		// $_SESSION['score']=$_row[score];
		
//            $_SESSION['ps']=$row[userpass];
?>
<script>



</script>
<?php

            header("Location: timer.php");


	}
	else
	{?>
	<script>alert("YOU HAVE CLAIMED TICKET");</script>
		<?php
		// header("Location:login.php");
	}
}
	else
	{
		header("Location:login.php?value=fail");
		 
	}


}

else
{
	 header("Location:login.php?value=fail");
	 //echo "<script>window.alert(\"Wrong Username And Password\");</script>";
	// echo("Wrong Username And Password");
	//   echo '<script language="javascript">';
	// 	 echo 'alert("Wrong Username And Password")';
	// 	  echo '</script>';
}


?>