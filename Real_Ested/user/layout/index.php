<?php
session_start();
include('database.php');
if(isset($cemail)){
$cemail=$_COOKIE['email'];
$cpassword=$_COOKIE['password'];
if($obj->getById("user","*","email='$cemail' AND password='$cpassword'")!=false){
		$student=$obj->getById("user","*","email='$email' AND password='$password'");
		$_SESSION['name']=$student['name'];
		header("location:dashboard.php");
	}

}
if(isset($_REQUEST['login'])){
	extract($_REQUEST);
	$password=sha1($password);
	if($obj->getById("user","*","email='$email' AND password='$password'")!=false){
		if(isset($_REQUEST['remember'])){
			//echo $_REQUEST['remember'];
			setcookie("email",$email,time()+86400);
			setcookie("password",$_REQUEST['password'],time()+86400);
			
		}
		$student=$obj->getById("user","*","email='$email' AND password='$password'");
		$_SESSION['name']=$student['name'];
		header("location:dashboard.php");
	}
	else{
	$msg="Invalid Email/Password";	
	}
}
if(isset($_SESSION['name'])){
	header("location:dashboard.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
</head>

<body style="width:600px; margin:0 auto; margin-top:200px;">
<span style="color:#C00; font-weight:bold;">
<?php
	echo @$msg;
?>
</span>
<form action="index.php" method="post">
    Email:<input type="text" name="email" value="<?php echo isset($_COOKIE['email'])?$_COOKIE['email']:"";?>" />
    &nbsp;Password:<input type="password" value="<?php echo isset($_COOKIE['password'])?$_COOKIE['password']:"";?>" name="password" />
    
    <input type="submit" name="login" value="Login" />
    <br />
Remember me<input type="checkbox" name="remember" value="yes" />
</form>
</body>
</html>