<?php
include('config.php');
	
	
	// --------------------- INSERT -------------------- 	
	
$name=$_REQUEST['uname'];
$roll=$_REQUEST['unumber'];
$pass=$_REQUEST['pwd'];
$confirmpass=$_REQUEST['cnfpwd'];
if ($pass==$confirmpass)
{	
$qry = " insert into tbl_user(name,roll,pass,score,role) values ('$name','$roll','$pass','0','USR')";
$result =mysqli_query($con,$qry);
   if($result) {
	  
	header("Location:login.php");
}
   else
{

  echo " error".mysqli_error($con);
}
}

else
	{
		 header("Location:login.php?value=fail");
		 //echo "<script>window.alert(\"Wrong Username And Password\");</script>";
         //echo("Wrong Username And Password");
        //  echo '<script language="javascript">';
		//  echo 'alert("Password did not match!!")';
		//   echo '</script>';
	}


	





?>