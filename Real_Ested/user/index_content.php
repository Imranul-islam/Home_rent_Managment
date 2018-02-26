
  <div class="rounded" style="width:350px; height:400px; margin-left:500px">
    <main class="container clear"> 
      <!-- main body --> 
      <?php
      $action=isset($_REQUEST['manage'])?$_REQUEST['manage']:"";
	switch($action){
	case"registration":
	?>
	<h1 align="center" style=" color:#4494DD; font-size:20px;">User Resistration</h1>
	<form cols="20" rows="10" action="index.php" method="post" style="color:#000000">
	Name:<input style="height:30px;" type="text" name="name" size="50" />
    Email:<input style="height:30px;" type="text" name="email" size="50" />
    Password:<input style="height:30px;" type="text" name="password" size="50" />
    Phone:<input style="height:30px;" type="text" name="phone" size="50" />
    Address:<textarea name="address" cols="45" rows="3"></textarea>
    <p align="center"><input size="5" type="submit" name="registration" value="Submit" /></p>
    </form>
	<?php
	break;
	case "sucsess":
	?>
    <div style="color:#000000">Submit Success!<br>
    Please <p align="center" style="width:150px; height:30px; font-size:16px;"><a href="index.php">Login</a></p></div>
    <?php	
	break;
	default:
	?>
        <span style="color:#C00; font-weight:bold;">
<?php
	echo @$msg;
?>
</span>
<form action="index.php" method="post" style="color:#000000; font-size:20px">
    Email:<input size="30" type="text" name="email" value="<?php echo isset($_COOKIE['email'])?$_COOKIE['email']:"";?>" />
    <br>
    &nbsp;Password:<input size="30" type="password" value="<?php echo isset($_COOKIE['password'])?$_COOKIE['password']:"";?>" name="password" />
    
    <p align="center"><input size="5" type="submit" name="login" value="Login" /></p>
    <br>
Remember me<input type="checkbox" name="remember" value="yes" />
</form>
<p align="center" style="width:150px; height:30px; font-size:16px;"><a href="index.php?manage=registration">Create Account</a></p>
      <!-- / main body -->
      <?php
	break;
	}
	?>  
      <div class="clear"></div>
    </main>
  </div>

</body>
</html>

