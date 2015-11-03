<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <title>Meridian</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles/style.css">    
</head>
<body class="page">
	<div id="wrapper">
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
	
		<div class="width">
			<div class="content">
				<h1>Ласкаво просимо на сайт туристичної фірми "Meridian"</h1>
				<br>
				<h1>Гарячі пропозиції</h1>
					<ul class="box_list">
						<li>
							<div class="box_yellow">
								<div class="img"><img src="images/2.jpg" width="620" height="300" alt="1" /></div>
									<div class="right">
										<div class="title">Пляжний відпочинок в Греції</div>
										<p>Можливість і відпочити, і познайомитися з великою історичною спадщиною Європи. Якщо ви любите цікаві екскурсії та відпочинок на морі, Греція вам точно підійде. </p>
									</div>
							</div>
          <!--end box yellow-->
						</li>
						<li>
							<div class="box_blue">
								<div class="img"><img src="images/3.jpg" width="620" height="300" alt="1" /></div>
									
							</div>
          <!--end box blue-->
						</li>
						<li>
							<div class="box_pink">
								<div class="img"><img src="images/4.jpg" width="620" height="300" alt="1" /></div>
									<div class="right">
										<div class="title">Surfers Paradise</div>
										<p>Perfect destination for a beachside holiday for the family.</p>
									</div>
							</div>
          <!--end box pink-->
						</li>
						<li>
							<div class="box_green">
								<div class="img"><img src="images/5.jpg" width="620" height="300" alt="1" /></div>
									<div class="right">
										<div class="title">Europe Panorama</div>
										<p>Visit all the top European cities for less.</p>
									</div>
								</div>
          <!--end box green-->
						</li>
					</ul>
			
			</div>
		</div>
	</div>
	<?php require_once("blocks/footer.php");?>
	
</body>
</html>