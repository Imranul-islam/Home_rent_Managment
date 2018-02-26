<div class="wrapper row3" align="center">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
<?php
$action=isset($_REQUEST['manage'])?$_REQUEST['manage']:"";
	switch($action){
	case"give_add":
	?>
			
			<div align="center">
            <h2>Add Menu</h2>
			<form cols="20" rows="10" action="dashboard.php" method="post">
			Name:<input style="height:30px;" type="text" name="name" size="40" />
            Price:<td><input type="text" name="price" style="height:30px;" size="20" /></td>
			Description:<textarea name="description" cols="125" rows="8"></textarea></td>
			<input type="submit" name="add_submit" value="Save Menu" style="height:30px;" />
			</form>
            
            </div>
           
			
            
			
<?php
case "message":

break;
case "contact_us":
?>              
				
                <div align="left" style="margin-left:250px;">  
                <h2>Where to Find Us</h2>
                <div id="googleMap" style="width:430px;height:250px;"></div>
                <p><strong>Homeland Agency, Dhaka</strong><br>
				Survey No: 1/1, Mirpor Road<br>
				Sukrabad, Dhanmondi<br>
				Dhaka-1209<br>
				Bangladesh<br></br>
				+8800-66291313<br>
				+8800-66291310<br></br>
				(Switchboard Number/General Enquiries) <br>
				For Contact:<br>
				Lines are open Monday to Friday (0830 – 1700 hours IST)<br>
				+8800-66291300<br>
				Email : admin.dhaka@homelandagency.org<br>
                <strong>Homeland Agency, Dhaka</strong><br>
                <form action="dashboard.php" method="post" style="border: 1px solid #eaeaea;padding: 10px 10px 0 10px;overflow: hidden;margin: 30px 0;">                
                Your name and last name:<input type="text" name="name" size="60"/>
                Your e-mail:<input type="text" name="email" size="60"/>
                Subject of your message:<input type="text" name="subject" size="60"/>
                Your message:
                <textarea name="message" style="box-sizing: border-box;font: 0.8em Arial,Helvetica,sans-serif;
line-height: 1.5em;" cols="60"rows="5"></textarea>
                <div align="center"><input type="submit" name="massage_submit" value="Submit"/></div>
                </form>
				</p>
                </div>
                
                <?php
break;
default:
?>
<div id="portfolio">
          <h2>SWEET HOME AND LAND</h2>
        <ul class="nospace clear">
          <li class="one_half first">
            <article><img class="borderedbox" src="../images/222.jpg" alt="">
              <h2>Kmrangir Chor</h2>
              <p>Property Code: L1</p>
              <p>Price: $200</p>
              <p>Location: Kamrangir Chor</p>
            </article>
          </li>
          <li class="one_half">
            <article><img class="borderedbox" src="../images/222.jpg" alt="">
              <h2>Kmrangir Chor</h2>
              <p>Property Code: L1</p>
              <p>Price: $200</p>
              <p>Location: Kamrangir Chor</p>
            </article>
          </li>
          <li class="one_half first">
            <article><img class="borderedbox" src="../images/222.jpg" alt="">
              <h2>Kmrangir Chor</h2>
              <p>Property Code: L1</p>
              <p>Price: $200</p>
              <p>Location: Kamrangir Chor</p>
            </article>
          </li>
          <li class="one_half">
            <article><img class="borderedbox" src="../images/222.jpg" alt="">
              <h2>Kmrangir Chor</h2>
              <p>Property Code: L1</p>
              <p>Price: $200</p>
              <p>Location: Kamrangir Chor</p>
            </article>
          </li>
          
          
      </div>
<?php
break;
}
?>
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
</div>

<!-- ################################################################################################ -->