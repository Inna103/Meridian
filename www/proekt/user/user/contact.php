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
      
  <div class="left_details">
			<h1>Туристична компанія </br> "Meridian" </h1>
			<p> 
              <span class="contact_title">Робочий телефон:</span> <span class="contact_detail">937-99-92</span> <br />
              <span class="contact_title">Мобільний телефон:</span> <span class="contact_detail">61 75555 5555</span> <br />
              <span class="blue"><span class="contact_title" >Адреса:</span></span><span class="contact_detail"> м.Чернівці<br /> вул. Університетська, 1 </span></p> <br />
			  
			  </p>
            
            

            
    </div><!--end left-->
    
    <div class="right_details">
          <p>Для того, щоб надіслати нам повідомлення на електронну пошту, заповніть форму нижче.</p>
          <form action="formsubmit.php" method="post">
            <fieldset id="contact">
            <label for="your_name">Ім'я:</label>
            <input name="your_name" type="text" class="forms" id="your_name" size="35" />
            <label for="your_email">Email:</label>
            <input name="your_email" type="text" class="forms" id="your_email" size="35" />
            <label for="phone">Телефон:</label>
            <input name="phone" type="text" class="forms" id="phone" size="35" />
            <label for="message">Текст листа:</label>
            <textarea name="message" cols="30" rows="6" class="forms" id="message"></textarea>
			<input name="submit_button" type="image" class="submit_button" id="submit_button" title="Submit Message" src="images/button_submit2.gif" />

            </fieldset>
          </form>
        
    
    
    </div><!--end right-->
    
    
  </div>
  <!--end  main content-->

	<?php require_once("blocks/footer.php");?>
	
</body>
</html>