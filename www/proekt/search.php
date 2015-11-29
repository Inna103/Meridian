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
					<a href="pro_nas.php" class='words_menu'>Про нас</a>
					<a href="contact.php" class='words_menu'>Контакти</a>
					<a href="user.php" class='words_menu'>Користувачу</a>
				</ul>
			</div>
	
		<!--start  main content-->
		<div id="content_body"> 
  
   
							
		<?php
			$db = "meridian1";
			$link = mysql_connect('localhost', 'user', 'user');
			if ( !$link )  die ("Неможливо підключитись до  MySQL");
		    {	
					mysql_select_db($db,$link) or die ("Неможливо відкрити $db");
			
		?>
					
					<!--<table class="table-one"  border="1" cellpadding="15" >
						<tr>
							<td><h1>Країна </h1></td>
							<td><h1>Місто</h1></td>
							<td><h1>Готель</h1></td>
							<td><h1>Дата в'їзду</h1></td>
							<td><h1>Кількість днів<h1></td>
							<td><h1>Ціна </h1></td>
							
						</tr> -->
		<?php
					//$zapyt="select Countries.name_country,Cities.name_city,Hotels.name_hotel,Trips.start_date,info.days,Tours.price FROM info
					//INNER JOIN Countries USING(id_country)			
					//INNER JOIN Cities  USING(id_city)
					//INNER JOIN Hotels USING(id_hotel)
					//INNER JOIN Trips USING(start_date)			
					//INNER JOIN Tours USING(price);";
					
				//	$dod=mysql_query($zapyt)or die(mysql_error());
					//$rows=mysql_num_rows($dod);
				//	if($rows!=0)
					//{
						
					//	while($line=mysql_fetch_array($dod,MYSQL_ASSOC)) 
					//	{
						//	echo "<tr>";
						//	foreach ($line as $key => $value)
							//	{
									//echo "<td>$value</td>";	
								
								//}
								//echo "</tr>";
						//}
								echo '</table>';
					//}	
						//else echo "Немає країн, які містять введені символи $str";
						
					if(isset($_POST["search"]))
				{
					 
					$str=$_POST["str"];
					
	
						$word=array();
						$zapyt="select Countries.name_country,Cities.name_city,Hotels.name_hotel,Trips.start_date,info.days,Tours.price FROM info
					INNER JOIN Countries USING(id_country)			
					INNER JOIN Cities  USING(id_city)
					INNER JOIN Hotels USING(id_hotel)
					INNER JOIN Trips USING(start_date)			
					INNER JOIN Tours USING(price)
					Where  Countries.name_country Like '%$str%' ";
						$dod=mysql_query($zapyt)or die(mysql_error());
						$rows=mysql_num_rows($dod)or die(mysql_error());
					if($rows!=0)
						{
						echo "<table border='0' cellpadding='5'>
						<tr>
							<td><h1>Країна </h1></td>
							<td><h1>Місто</h1></td>
							<td><h1>Готель</h1></td>
							<td><h1>Дата в'їзду</h1></td>
							<td><h1>Кількість днів<h1></td>
							<td><h1>Ціна </h1></td>
							
						</tr> ";
							while($line=mysql_fetch_array($dod,MYSQL_ASSOC)) 
							{
								echo "<tr>";
								//print_r($line);
								foreach ($line as $key => $value)
								{
									echo "<td>$value</td>";	
								
								}
								echo "</tr>";
							}
						echo "</table>";
							
						}  else echo "Немає потрібних даних";
 
					}
			}
		?>
              			
<br>
			<form name="search" method="post">
			<table class="table-two"  cellpadding='5'>
			<tr>
				<td> <h1>Введіть символи:</h1></td>
				<td><input type="text" name="str"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type=submit name="search" value="Пошук"></td>
			</tr>
			</table>
			</form>		
	

		</div>
  <!--end  main content-->

	<?php require_once("blocks/footer.php");?>
	
	</body>
</html>