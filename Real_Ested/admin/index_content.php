
  <div class="rounded" style="width:350px; height:400px; margin-left:500px">
    <main class="container clear"> 
      <!-- main body --> 
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
    <br />
Remember me<input type="checkbox" name="remember" value="yes" />
</form>
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>

</body>
</html>

