<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <title>Meridian</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles/style.css">    
</head>
<body class="page">
	<div id="wrapper_contact">
		<div id="header">
			<div class="login">
				<?
				if(isset($_SESSION['admin']))
				{
					require_once("blocks/userdata.php");
				}
				else
					{
						require_once("blocks/auth_form.php");
					}
				?>
			</div>
			<div id="header_logo"> <a href="#"><img src="images/logo.png" alt="Logo" width="241" height="125" border="0" /></a> </div>
		</div>
 
		<div class="width">
			<ul id="side_menu">
				<a href="index.php" class='words_menu ' >Головна</a>
				<a href="biography.php" class='words_menu'>Про нас</a>
				<a href="" class='words_menu'>Відгуки </a>
				<a href="contact.php" class='words_menu'>Контакти</a>
				<a href="user.php" class='words_menu'>Користувачу</a>
			</ul>
		</div>
	
		<!--start  main content-->
  <div id="content_body"> 
  
      <!--end left home-->
      <!--end right home-->
      
	  
	  
	  <!--
	  TARAS FOTO
	  -->
  <div class="left_details">
			       
            

            
    </div><!--end left-->
    
    <div class="right_details">
         
          <form action="formsubmit.php" method="post">
            <fieldset id="contact">
			<table>
			<tr>
				<td>
					<label for="find_tur">Find tur</label>
					<input name="find_tur" type="text" class="forms" id="find_tur" size="10" />
				</td>
		
				<td>
				
				<label for="tur">Sort</label>
				<select name="sort" size="1">
					<option selected  value="sort">по зростанню.
					<option value="sort">по спаданню.
					
				</td>
				
				<td>
					<label for="tur">Tur</label>
					<input name="tur" type="text" class="forms" id="tur" size="10" />
				</td>
			</tr>	
			</table>
            </fieldset>
          </form>
        
    
    
    </div><!--end right-->
    
    
  </div>
  <!--end  main content-->

	<?php require_once("blocks/footer.php");?>
	
</body>
</html>