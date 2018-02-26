<?php
session_start();
include('database.php');
if(isset($cemail)){
$cemail=$_COOKIE['email'];
$cpassword=$_COOKIE['password'];
if($obj->getById("admin","*","email='$cemail' AND password='$cpassword'")!=false){
		$student=$obj->getById("admin","*","email='$email' AND password='$password'");
		$_SESSION['name']=$student['name'];
		header("location:dashboard.php");
	}

}
if(isset($_REQUEST['login'])){
	extract($_REQUEST);
	$password=sha1($password);
	if($obj->getById("admin","*","email='$email' AND password='$password'")!=false){
		if(isset($_REQUEST['remember'])){
			//echo $_REQUEST['remember'];
			setcookie("email",$email,time()+86400);
			setcookie("password",$_REQUEST['password'],time()+86400);
			
		}
		$student=$obj->getById("admin","*","email='$email' AND password='$password'");
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
<!DOCTYPE html>

<html>
<head>
<title>//Real_Estate//</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body style="">

<br></br>
<div class="wrapper row1" style="margin:0 auto; margin-top:100px;margin-left:500px">
  <header id="header" class="clear"> 
   
    <div id="logo" class="fl_left">
      <h1><a href="login.php">Homeland Agency</a></h1>
      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_____Find Your Dream Place______</p>
    </div>
    
    <!-- ################################################################################################ --> 
  </header>
</div>
<br>
