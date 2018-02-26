<?php
session_start();
include("database.php");
if(isset($_REQUEST['action']) && $_REQUEST['action']=='logout'){
	session_destroy();
	header("location:index.php");
}

if(!isset($_SESSION['name'])){
	header("location:index.php");
}

if(isset($_REQUEST['add_submit'])){
	extract($_REQUEST);
	if($obj->Insert("post","name='$name',code='$code',price='$price',location='$location'")){
	header("location:dashboard.php?manage=menus");
}
else{
$err_msg="Insert Fail";	
}
}
if(isset($_REQUEST['edit_menu_process'])){
	extract($_REQUEST);
	if($obj->Update("user","name='$name',email='$email',password='$password'","phone='$phone',address='$address'")){
		header("location:dashboard.php?manage=user");
	}
	else{
		$err_msg="Update Fail";	
	}
}
if(isset($_REQUEST['cdel_id'])){
		$cdel_id=$_REQUEST['cdel_id'];
		if($obj->Delete("students","id=$cdel_id")){
			echo "Delete Success";
		}
		else{
			echo "Delete Fail!";	
		}
	}
	if(isset($_REQUEST['menu_del_id'])){
		$menu_del_id=$_REQUEST['menu_del_id'];
		?>
        Do you want to Delete?<a href="dashboard.php?cdel_id=<?php echo $menu_del_id;?>">Yes</a>&nbsp;<a href="dashboard.php?manage=user">No</a>
        <?php
	}
?>
<!DOCTYPE html>

<html>
<head>
<title>Srm Real-Estet LT</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<!-- / Demo styling - remove before use -->
<style type="text/css">
.container .group{text-align:center;}
.container .group div{padding:8px 0; font-size:16px; font-family:Verdana, Geneva, sans-serif;}
.container .group div:nth-child(odd){color:#FFFFFF; background:#CCCCCC;}
.container .group div:nth-child(even){color:#FFFFFF; background:#979797;}
@media screen and (min-width:180px) and (max-width:900px) {
	.container .group div{margin-bottom:0;}
}
</style>
<script src="http://maps.googleapis.com/maps/api/js"></script>
	<script>
	function initialize() {
  		var mapProp = {
    		center:new google.maps.LatLng(23.752974, 90.377437),
    		zoom:18,
    		mapTypeId:google.maps.MapTypeId.ROADMAP
  		};
  		var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
	}
	google.maps.event.addDomListener(window, 'load', initialize);
	</script>
<!-- / Demo styling -->
</head>
<body id="top">
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="clear"> 
    <!-- ################################################################################################ -->
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">A - Z Index</a></li>
        <li><a href="#">Welcome <?php echo $_SESSION['name'];?></a></li>
        <li><a href="dashboard.php?action=logout">Log Out</a></li>
      </ul>
    </nav>
    <!-- ################################################################################################ --> 
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left" style="margin-left:250px">
      <h1><a href="#">Homeland Agency</a></h1>
      <p>______Find our Dream Plase______</p>
    </div>
    <!-- ################################################################################################ --> 
  </header>
</div>
