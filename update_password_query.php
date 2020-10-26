<?php
extract($_POST);
include('./dbconnect.php');
if(isset($update_password))
{
    
    $uId=$_SESSION['userId'];
    $pass=md5($op);
	$que=mysqli_query($conn,"select password from user where id='$uId'");
	$row=mysqli_fetch_array($que);
    $password=$row['password'];
	if($password!=$pass)
		{
		$err="<font color='red'>You Enterd wrong old password</font>";
		}
		
	elseif($np!=$cp)
		{
		$err="<font color='red'>New Password and confirm password must be same</font>";
		}
	else
	{
        $up=md5($cp);
		mysqli_query($conn,"update user set password='$up' where id='$uId'");
		$err="<font color='green'>Password have been Changed successfully !!</font>";
	}

}
function isLoggedIn()
{
    if (isset($_SESSION['username'])) {
        return true;
    }else{
        return false;
    }
}

?>