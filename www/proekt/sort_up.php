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
				if(isset($_SESSION['login']))
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
					<a href="pro_nas.php" class='words_menu'>Про нас</a>
					<a href="contact.php" class='words_menu'>Контакти</a>
					<a href="user.php" class='words_menu'>Користувачу</a>
				</ul>
			</div>
	
		<!--start  main content-->
		<div id="content_body"> 
  
   
			<?php
				$db = "meridian2";
				
				$link = mysql_connect('localhost', 'user', 'user');
				if ( !$link )  die ("Неможливо підключитись до  MySQL");
				{	
					         ?>
           			 
            			<table class="table-one" border="2" cellpadding="15" >
                		<tr  style="background:#31b2c3">
                    		<td><h2>Країна </h2></td>
							<td><h2>Місто</h2></td>
							<td><h2>Готель</h2></td>
							<td><h2>Дата в'їзду</h2></td>
							<td><h2>Кількість днів</h2></td>
							<td style="position:relative;"><h2>Ціна </h2>
								<form action="sort_up.php" style="position:absolute;top:20px; right: 20px;">
									<input type="image" src="up.png" style=" height:20px;" >	
								</form>
								<form action="sort_down.php" style="position:absolute;top:20px; right: 35px;">
									<input type="image" src="down.png" style=" height:20px;" >	
								</form>
							</td>
		<?php
				mysql_select_db ( $db ) or die ("Неможливо відкрити $db");
				
			$sql="select Countries.name_country,Cities.name_city,Hotels.name_hotel,Tours.start_date,Tours.days,Tours.price FROM Tours
					INNER JOIN Countries USING(id_country)			
					INNER JOIN Cities  USING(id_city)
					INNER JOIN Hotels USING(id_hotel)
					ORDER BY Tours.price ASC;";
				$zapyt =mysql_query($sql)or die('Помилка hhhh');
				$rows=mysql_num_rows($zapyt)or die('Помилка ooo');
				if($rows!=0)
				{
						while($line=mysql_fetch_array($zapyt,MYSQL_ASSOC))
					{
							echo '<tr>';
							foreach ($line as $key => $value)
								{
								echo "<td>".$value."</td>";		
								}
                            echo '</tr>';	
                    }
                                 echo "</table>";
								$count_of_passenger = 0;

                        
				} else echo "<h3>Пуста таблиця</h3>";
			}
			?>
			
			
    
		</div>
  <!--end  main content-->

	<?php require_once("blocks/footer.php");?>
	
	</body>
</html>