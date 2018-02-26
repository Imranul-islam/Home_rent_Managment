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
          <!--############################################################################################ -->   
          <div id="portfolio">
          <h2>Available Property</h2>
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
        </ul>
      </div>
           
          <!-- ################################################################################################ --> 
        </div>
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
      