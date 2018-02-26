<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
<?php
$action=isset($_REQUEST['manage'])?$_REQUEST['manage']:"";
	switch($action){
	case"post_add":
	?>
			
			<div>
            <h2>Post Add</h2>
			<form cols="20" rows="10" action="dashboard.php" method="post" enctype="multipart/form-data">
			Name:<input style="height:30px;" type="text" name="name" size="100" />
            Product Code:<input type="text" name="code" style="height:30px;" size="100" />
            Price:<input style="height:30px;" type="text" name="price" size="100" />
            
            Image:<input type="file" multiple="multiple" />
			Location:<textarea name="location" cols="125" rows="10"></textarea>
			<input type="submit" name="add_submit" value="Save Menu" style="height:30px;" />
			</form>
            
            </div>
           
			
            
			
<?php
break;
case "see_post":
?>
<table width="100" border="1">
  <tbody>
    <tr>
      <th scope="col" colspan="2">Product Information</th>
      <?php
 $all_menus=$obj->getAll("add_product","*");
foreach($all_menus as $menu){
	extract($menu);
 ?>    
    </tr>
    <tr>
      <th scope="row">Name</th>
      <td><?php echo $title; ?></td>
    </tr>
    <tr>
      <th scope="row">Price</th>
      <td><?php echo $price; ?></td>
    </tr>
    <tr>
      <th scope="row">Description</th>
      <td><?php echo $description ; ?></td>
    </tr>
    <?php
}
	?>
  </tbody>
</table>

<?php
break;
case "message":
?>
<table width="100" border="1">
  <tbody>
    <tr>
      <th scope="col" colspan="2">Client Message</th>
      <?php
$all_menus=$obj->getAll("message","*");
foreach($all_menus as $menu){
	extract($menu);
 ?>    
    </tr>
    <tr>
      <th scope="row">SI No</th>
      <td><?php echo $message_id; ?></td>
    </tr>
    <tr>
      <th scope="row">Product Code</th>
      <td><?php echo $product_code; ?></td>
    </tr>
    <tr>
      <th scope="row">Clien Email</th>
      <td><?php echo $email ; ?></td>
    </tr>
    <tr>
      <th scope="row">Message Subject</th>
      <td><?php echo $subject ; ?></td>
    </tr>
    <tr>
      <th scope="row">Message</th>
      <td><?php echo $message ; ?></td>
    </tr>
    <?php
}
	?>
  </tbody>
</table>
<?php
break;
case "user":
?>
              
                    <h2>Manage Menus</h2>
                    <div>
                        <table width="100%" border="0" cellspacing="0" cellpadding="5">
                            <tr>
                                <td scope="col">Sl no</td>
                                <td scope="col">Name</td>
                                <td scope="col">Email</td>
                                <td scope="col">Password</td>
                                <td scope="col">Phone</td>
                                <td scope="col">Address</td>
                                
                            </tr>
                            <?php
                            if ($obj->getAll("user", "*") != false) {
                                $menus = $obj->getAll("user", "*");
                                 $sl = 1;
                                foreach ($menus as $menu) {
                                    extract($menu);
                                    ?>
                                    <tr>
                                        <td><?php echo $sl++; ?></td>
                                        <td><?php echo $name; ?></td>
                                        <td><?php echo $email; ?></td>
                                        <td><?php echo $password; ?></td>
                                        <td><?php echo $phone; ?></td>
                                        <td><?php echo $address; ?></td>
                                        
                                    </tr>
                                    
                                    <?php
                                   
                                    
                                    
                                }
                            }
                         
                            ?>

                            
                        </table>

                    </div>
                    </div>
                <?php
break;
case "edit_menu":
                        $edit_menu_id = $_REQUEST['edit_menu_id'];
                        extract($obj->getById("user", "*", "id=$edit_menu_id"));
                        ?>
                        <h2>Edit Menu</h2>
                        <form action="dashboard.php" method="post">
                            <table width="100%" border="0" cellspacing="0" cellpadding="5">
                                <tr style="height:50px;">
                                    <th scope="col">Name</th>
                                    <th scope="col" style="text-align:left;"><input value="<?php echo $name; ?>" style="height:30px;" type="text" name="name" size="100" /></th>
                                </tr>
                                <tr style="height:50px;">
                                    <th scope="col">Email</th>
                                    <th scope="col" style="text-align:left;"><input value="<?php echo $email; ?>" style="height:30px;" type="text" name="name" size="100" /></th>
                                </tr>
                                <tr style="height:50px;">
                                    <th scope="col">Password</th>
                                    <th scope="col" style="text-align:left;"><input value="<?php echo $password; ?>" style="height:30px;" type="text" name="name" size="100" /></th>
                                </tr>
                                <tr style="height:50px;">
                                    <th scope="col">Phone</th>
                                    <th scope="col" style="text-align:left;"><input value="<?php echo $phone; ?>" style="height:30px;" type="text" name="name" size="100" /></th>
                                </tr>
                                <tr style="height:50px;">
                                    <th scope="col">Address</th>
                                    <th scope="col" style="text-align:left;"><input value="<?php echo $address; ?>" style="height:30px;" type="text" name="name" size="100" /></th>
                                </tr>
                                <tr>

                                    <td colspan="2" style="text-align:center">
                                        <input type="hidden" name="edit_menu_process" value="<?php echo $id; ?>" />
                                        <input type="submit" name="update" value="Save Menu" /></td>
                                </tr>

                            </table>
                        </form>
                        <?php
                        break;
						case "client_message":
						?>
                        
                        ?>
              
                    <h2>Manage Menus</h2>
                    <div>
                        <table width="100%" border="0" cellspacing="0" cellpadding="5">
                            <tr>
                                <td scope="col">Sl no</td>
                                <td scope="col">Name</td>
                                <td scope="col">Email</td>                                
                                <td scope="col">Phone</td>
                                <td scope="col">Location</td>
                                <td scope="col">Message</td>
                                <td scope="col">Action</td>
                            </tr>
                            <?php
                            if ($obj->getAll("client", "*") != false) {
                                $menus = $obj->getAll("client", "*");
                                 $sl = 1;
                                foreach ($menus as $menu) {
                                    extract($menu);
                                    ?>
                                    <tr>
                                        <td><?php echo $sl++; ?></td>
                                        <td><?php echo $name; ?></td>
                                        <td><?php echo $email; ?></td>                                       
                                        <td><?php echo $phone; ?></td>
                                        <td><?php echo $location; ?></td>
                                        <td><?php echo $message; ?></td>
                                        <td>
                                            <a href="#<?php echo $menu_id; ?>">Edit</a> &nbsp;&nbsp;
                                            <a href="#">Delete</a></td>
                                    </tr>
                                    
                                    <?php
                                   
                                    
                                    
                                }
                            }
                         
                            ?>                   
                        </table>

                    </div>
                    </div>
               
                        
                        <?php
						break;
default:
echo "<h2>Home Page</h2>";
break;
}
?>
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
</div>

<!-- ################################################################################################ -->
