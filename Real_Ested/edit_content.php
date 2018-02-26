<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
      <!-- ################################################################################################ -->
      <div class="group btmspace-30"> 
        <!-- Left Column -->
        <?php
        include("content_left.php");
		?>
        <!-- / Left Column --> 
        <!-- Middle Column -->
        <div class="one_half"> 
          <!-- ################################################################################################ -->
          <?php
          	$action=isset($_REQUEST['manage'])?$_REQUEST['manage']:"";
		  	switch($action){
				case"about_us":
				?>                
                <img src="images/PhotoPremises-9.gif">
                <br>
                <h2>About Us</h2>
                <p>Imanul Islam<br>
                Dhaka Agent<br>
                imran@homelang.org<br>
                Mobile:0198237768
                </p>
                <p>Mahmudul Hasan<br>
                Chittagong Agent<br>
                mahmud@homelang.org<br>
                Mobile:0194546667
                </p>
                <p>Anuwar Hossain<br>
                Borishal Agent<br>
                imran@homelang.org<br>
                Mobile:0194565465
                </p>
                
                </div>
                               
                <?php				
				break;				
				case "contact_us":
				?>                
                <h2>Where to Find Us</h2>
                <div id="googleMap" style="width:430px;height:250px;"></div>
                <p><strong>Homeland Agency, Dhaka</strong><br>
				Survey No: 1/1, Romna Park<br>
				Sukrabad, Dhanmondi<br>
				Dhaka-1209<br>
				Bangladesh<br></br>
				+8800-66291313<br>
				+8800-66291310<br></br>
				(Switchboard Number/General Enquiries) <br>
				For Contact:<br>
				Lines are open Monday to Friday (0830 – 1700 hours IST)<br>
				+8800-66291300<br>
				Email (Admissions): contact@homeland.org<br>
                <strong>Homeland Agency, Dhaka</strong><br>
                <form action="edit_index.php" method="post" style="border: 1px solid #eaeaea;padding: 10px 10px 0 10px;overflow: hidden;margin: 30px 0;">                
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
				case "message_success":
				?>
                <h2>Message Confirmation</h2>
                <p>Dear Your Massage Send Success<br>
                Please Wait Imideately Our admin Send Yor Anser
                </p>
                <?php
				break;
				
				case "Offers":
				?>
                <h2>Spesial Offers</h2>
                <div style="font: 0.8em Arial,Helvetica,sans-serif;
line-height: 1.5em;">
                	<!-- ---------------------------------------------------------------- -->
                	<div style="clear:both;display:block;border-top:1px dotted #eaeaea;padding:5px 0;overflow: hidden;}">
                    	<div><span style="float: left;padding: 5px 30px 20px 0;clear: both;"><img typeof="foaf:Image" src="images/reading1.png" width="100" height="100" /></span>
                        </div>
                        <div class="views-field views-field-field-date"><em class="field-content"><span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2016-03-31T00:00:00+02:00">4 April 2016</span></em></div>  
  						<div>        			
                        	<div class="article_title">30% offer</div> 
                        </div>  
  						<div>
                        	<div class="article_body">
                            	<p>Property Code: L1<br>
             						Price: $200<br>
              						Location: Kamrangir Chor
                                </p>
                                <p class="right"><a href="edit_index.php?manage=read_more">Interest &raquo;</a></p>
                            </div>					  						
                          </div>  
                 	</div>
                    <!-- ---------------------------------------------------------------- -->
  					<div style="clear:both;display:block;border-top:1px dotted #eaeaea;padding:5px 0;overflow: hidden;}">
                       	<div><span style="float: left;padding: 5px 30px 20px 0;clear: both;"><img typeof="foaf:Image" src="images/reading2.png" width="268" height="151" /></span>
                        </div>  
  						<div class="views-field views-field-field-date"><em class="field-content"><span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2016-03-26T00:00:00+01:00">26 March 2016</span></em>
                        </div>  
  						<div>        		
                        	<div class="article_title">20% offer</div>  
                    	</div>  
  						<div>        
                        	<div class="article_body"><p>Property Code: L1<br>
             						Price: $200<br>
              						Location: Kamrangir Chor
                                </p>
                                <p class="right"><a href="edit_index.php?manage=read_more">Interest &raquo;</a></p>
                                </div>  
                     	</div> 
             		</div>
                    <!-- ---------------------------------------------------------------- -->
  					<div style="clear:both;display:block;border-top:1px dotted #eaeaea;padding:5px 0;overflow: hidden;}">
                     	<div><span style="float: left;padding: 5px 30px 20px 0;clear: both;"><img typeof="foaf:Image" src="images/reading3.png" width="268" height="201" /></span>  
                        </div>  
  						<div class="views-field views-field-field-date"><em class="field-content"><span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2016-03-26T00:00:00+01:00">26 March 2016</span></em>  
                        </div>  
  						<div>        
                        	<div class="article_title">50% offer</div>  
                    	</div>  
  						<div>        
                        	<div class="article_body"><p>Property Code: L1<br>
             						Price: $200<br>
              						Location: Kamrangir Chor
                                </p>
                                <p class="right"><a href="edit_index.php?manage=read_more">Interest &raquo;</a></p>
                                </div>  
                       	</div>  
                 	</div>
                    <!-- ---------------------------------------------------------------- -->
  					<div style="clear:both;display:block;border-top:1px dotted #eaeaea;padding:5px 0;overflow: hidden;}">
                     	<div><span style="float: left;padding: 5px 30px 20px 0;clear: both;"><img typeof="foaf:Image" src="images/reading4.png" width="268" height="201" /></span>  
                        </div>  
  						<div class="views-field views-field-field-date"><em class="field-content"><span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2016-03-15T00:00:00+01:00">15 March 2016</span></em>  
                        </div>  
  						<div>        
                        	<div class="article_title">10% offer</div>  
                     	</div>  
  						<div>        
                        	<div class="article_body"><p>Property Code: L1<br>
             						Price: $200<br>
              						Location: Kamrangir Chor
                                </p>
                                <p class="right"><a href="edit_index.php?manage=read_more">Interest &raquo;</a></p>
                            </div>  
                      	</div>  
                	</div>
                    <!-- ---------------------------------------------------------------- -->
 					<!-- ---------------------------------------------------------------- -->
				
 				  </div>
                  </div>
                <?php
				break;
				case "land":
				?>
                
                <h2>LAND</h2>
        <ul class="nospace clear">
          <li class="one_half first">
            <article><img class="borderedbox" src="images/lande/1.jpg" alt="">
              <h2>Kmrangir Chor</h2>
              <p>Property Code: L1</p>
              <p>Price: $200</p>
              <p>Location: Kamrangir Chor</p>
              <p class="right"><a href="edit_index.php?manage=read_more">Interest &raquo;</a></p>
            </article>
          </li>
          <li class="one_half">
            <article><img class="borderedbox" src="images/lande/2.jpg" alt="">
              <h2>Kmrangir Chor</h2>
              <p>Property Code: L1</p>
              <p>Price: $200</p>
              <p>Location: Kamrangir Chor</p>
              <p class="right"><a href="edit_index.php?manage=read_more">Interest &raquo;</a></p>
            </article>
          </li>
          <li class="one_half first">
            <article><img class="borderedbox" src="images/lande/3.jpg" alt="">
              <h2>Kmrangir Chor</h2>
              <p>Property Code: L1</p>
              <p>Price: $200</p>
              <p>Location: Kamrangir Chor</p>
              <p class="right"><a href="edit_index.php?manage=read_more">Interest &raquo;</a></p>
            </article>
          </li>
          <li class="one_half">
            <article><img class="borderedbox" src="images/lande/4.jpg" alt="">
              <h2>Kmrangir Chor</h2>
              <p>Property Code: L1</p>
              <p>Price: $200</p>
              <p>Location: Kamrangir Chor</p>
              <p class="right"><a href="edit_index.php?manage=read_more">Interest &raquo;</a></p>
            </article>
          </li>
          <li class="one_half first">
            <article><img class="borderedbox" src="images/lande/5.jpg" alt="">
              <h2>Kmrangir Chor</h2>
              <p>Property Code: L1</p>
              <p>Price: $200</p>
              <p>Location: Kamrangir Chor</p>
              <p class="right"><a href="edit_index.php?manage=read_more">Interest &raquo;</a></p>
            </article>
          </li>
          <li class="one_half">
            <article><img class="borderedbox" src="images/lande/6.jpg" alt="">
              <h2>Kmrangir Chor</h2>
              <p>Property Code: L1</p>
              <p>Price: $200</p>
              <p>Location: Kamrangir Chor</p>
              <p class="right"><a href="edit_index.php?manage=read_more">Interest &raquo;</a></p>
            </article>
          </li>
        </ul>
      </div>
                
                <?php
				break;
				case "flate":
				?>
                
                <h2>Flate</h2>
        <ul class="nospace clear">
          <li class="one_half first">
            <article><img class="borderedbox" src="images/flate/1.jpg" alt="">
              <h2>Kmrangir Chor</h2>
              <p>Property Code: L1</p>
              <p>Price: $200</p>
              <p>Location: Kamrangir Chor</p>
              <p class="right"><a href="edit_index.php?manage=read_more">Interest &raquo;</a></p>
            </article>
          </li>
          <li class="one_half">
            <article><img class="borderedbox" src="images/flate/2.jpg" alt="">
              <h2>Kmrangir Chor</h2>
              <p>Property Code: L1</p>
              <p>Price: $200</p>
              <p>Location: Kamrangir Chor</p>
              <p class="right"><a href="edit_index.php?manage=read_more">Interest &raquo;</a></p>
            </article>
          </li>
          <li class="one_half first">
            <article><img class="borderedbox" src="images/flate/3.jpg" alt="">
              <h2>Kmrangir Chor</h2>
              <p>Property Code: L1</p>
              <p>Price: $200</p>
              <p>Location: Kamrangir Chor</p>
              <p class="right"><a href="edit_index.php?manage=read_more">Interest &raquo;</a></p>
            </article>
          </li>
          <li class="one_half">
            <article><img class="borderedbox" src="images/flate/4.jpg" alt="">
              <h2>Kmrangir Chor</h2>
              <p>Property Code: L1</p>
              <p>Price: $200</p>
              <p>Location: Kamrangir Chor</p>
              <p class="right"><a href="edit_index.php?manage=read_more">Interest &raquo;</a></p>
            </article>
          </li>
          <li class="one_half first">
            <article><img class="borderedbox" src="images/flate/5.jpg" alt="">
              <h2>Kmrangir Chor</h2>
              <p>Property Code: L1</p>
              <p>Price: $200</p>
              <p>Location: Kamrangir Chor</p>
              <p class="right"><a href="edit_index.php?manage=read_more">Interest &raquo;</a></p>
            </article>
          </li>
          <li class="one_half">
            <article><img class="borderedbox" src="images/flate/6.jpg" alt="">
              <h2>Kmrangir Chor</h2>
              <p>Property Code: L1</p>
              <p>Price: $200</p>
              <p>Location: Kamrangir Chor</p>
              <p class="right"><a href="edit_index.php?manage=read_more">Interest &raquo;</a></p>
            </article>
          </li>
          
      </div>
                <?php
				break;
				case "home":
				?>                                                          
                
                <h2>SWEET HOME</h2>
        <ul class="nospace clear">
          <li class="one_half first">
            <article><img class="borderedbox" src="images/home/1.jpg" alt="">
              <h2>Kmrangir Chor</h2>
              <p>Property Code: L1</p>
              <p>Price: $200</p>
              <p>Location: Kamrangir Chor</p>
              <p class="right"><a href="edit_index.php?manage=read_more">Interest &raquo;</a></p>
            </article>
          </li>
          <li class="one_half">
            <article><img class="borderedbox" src="images/home/2.jpg" alt="">
              <h2>Kmrangir Chor</h2>
              <p>Property Code: L1</p>
              <p>Price: $200</p>
              <p>Location: Kamrangir Chor</p>
              <p class="right"><a href="edit_index.php?manage=read_more">Interest &raquo;</a></p>
            </article>
          </li>
          <li class="one_half first">
            <article><img class="borderedbox" src="images/home/3.jpg" alt="">
              <h2>Kmrangir Chor</h2>
              <p>Property Code: L1</p>
              <p>Price: $200</p>
              <p>Location: Kamrangir Chor</p>
              <p class="right"><a href="edit_index.php?manage=read_more">Interest &raquo;</a></p>
            </article>
          </li>
          <li class="one_half">
            <article><img class="borderedbox" src="images/home/4.jpg" alt="">
              <h2>Kmrangir Chor</h2>
              <p>Property Code: L1</p>
              <p>Price: $200</p>
              <p>Location: Kamrangir Chor</p>
              <p class="right"><a href="edit_index.php?manage=read_more">Interest &raquo;</a></p>
            </article>
          </li>
          <li class="one_half first">
            <article><img class="borderedbox" src="images/home/5.jpg" alt="">
              <h2>Kmrangir Chor</h2>
              <p>Property Code: L1</p>
              <p>Price: $200</p>
              <p>Location: Kamrangir Chor</p>
              <p class="right"><a href="edit_index.php?manage=read_more">Interest &raquo;</a></p>
            </article>
          </li>
          <li class="one_half">
            <article><img class="borderedbox" src="images/home/6.jpg" alt="">
              <h2>Kmrangir Chor</h2>
              <p>Property Code: L1</p>
              <p>Price: $200</p>
              <p>Location: Kamrangir Chor</p>
              <p class="right"><a href="edit_index.php?manage=read_more">Interest &raquo;</a></p>
            </article>
          </li>
          
          
      </div>          
                <?php
				break;
				case"read_more":
				?>
                
                <h2>Client Information Send</h2>
                <form action="edit_index.php" method="post" style="font-size:18px">
                Property Code:<input type="text" name="property_code" size="25"/>
                Name:<input type="text" name="name" size="25"/>
                Email:<input type="text" name="email" size="25"/>
                Phone:<input type="text" name="phone" size="25"/>
                Location:<textarea type="text" name="location" cols="50" rows="3"></textarea>
                Message:<textarea type="text" name="message" size="10" cols="50" rows="8"></textarea>
                <p align="right"><input type="submit" name="client_submit" value="Send"/></p>                
                </form>

                
                
                </div>
                <?php
				break;
				case"client_succes":
				?>
                <h2>Success Message</h2>
                <p>Your message has been send Successfully<br>
                Please wait Imedeate we will Contact with you.
                </p>
                </div>
                
				<?php
				break;				
				default:
				?>                
          <div id="portfolio">
          <h2>SWEET HOME AND LAND</h2>
        	<ul class="nospace clear">
        	<?php
			if($obj->getAll("post","*")){
				$menu=$obj->getAll("post","*");
				foreach($menu as $menus){
					extract($menus);
			?>
			<li class="one_half first">
            	<article><img class="borderedbox" src="images/hgt.jpg" alt="">
              	<h2><?php echo $name; ?></h2>
              	<p>Property Code:&nbsp; <?php echo $code; ?></p>
              	<p>Price:&nbsp; <?php echo $price; ?></p>
              	<p>Location:&nbsp; <?php echo $location; ?></p>
              	<p class="right"><a href="edit_index.php?manage=read_more">Interest &raquo;</a></p>
            	</article>
          	</li>
  
			<?php
				}		
			}
			?>
          <li class="one_half first">
            <article><img class="borderedbox" src="images/222.jpg" alt="">
              <h2>Kmrangir Chor</h2>
              <p>Property Code: L1</p>
              <p>Price: $200</p>
              <p>Location: Kamrangir Chor</p>
              <p class="right"><a href="edit_index.php?manage=read_more">Interest &raquo;</a></p>
            </article>
          </li>
          <li class="one_half">
            <article><img class="borderedbox" src="images/222.jpg" alt="">
              <h2>Kmrangir Chor</h2>
              <p>Property Code: L1</p>
              <p>Price: $200</p>
              <p>Location: Kamrangir Chor</p>
              <p class="right"><a href="edit_index.php?manage=read_more">Interest &raquo;</a></p>
            </article>
          </li>
          <li class="one_half first">
            <article><img class="borderedbox" src="images/222.jpg" alt="">
              <h2>Kmrangir Chor</h2>
              <p>Property Code: L1</p>
              <p>Price: $200</p>
              <p>Location: Kamrangir Chor</p>
              <p class="right"><a href="edit_index.php?manage=read_more">Interest &raquo;</a></p>
            </article>
          </li>
          <li class="one_half">
            <article><img class="borderedbox" src="images/222.jpg" alt="">
              <h2>Kmrangir Chor</h2>
              <p>Property Code: L1</p>
              <p>Price: $200</p>
              <p>Location: Kamrangir Chor</p>
              <p class="right"><a href="edit_index.php?manage=read_more">Interest &raquo;</a></p>
            </article>
          </li>
         
          
          
      </div>
                <?php
				break;
			}

		  ?>
          
          <!-- ################################################################################################ --> 
        
        
        <!-- / Middle Column --> 
        <!-- Right Column -->
       
        <!-- / Right Column --> 
      </div>
      <!-- ################################################################################################ --> 
      <!-- ################################################################################################ -->
      <div id="twitter" class="group btmspace-30">
        <div class="one_quarter first center"><a href="#"><i class="fa fa-twitter fa-3x"></i><br>
          Follow Us On Twitter</a></div>
        <div class="three_quarter bold">
          <p>Inteligula congue id elis donec sce sagittis intes id laoreet aenean. Massawisi condisse leo sem ac tincidunt nibh quis dui fauctor et donecnibh elis velit <a href="#">@name</a> - 10:15 AM yesterday</p>
        </div>
      </div>
      <!-- ################################################################################################ --> 
      <!-- ################################################################################################ -->
      