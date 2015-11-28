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
  
   
							<form class="form-wrapper">
								<input id="search" placeholder="Пошук по країні" required="" type="text">
								<input value="Пошук" id="submit" type="submit">	
							</form>
						
					
				
					
				<table class="table-one" border="1" cellpadding=15 align=center >
	    		<tr >
            		<td><h1>Країна </h1></td>
            		<td><h1>Місто</h1></td>
           	       	<td><h1>Готель</h1></td>
	        		<td><h1>Дата в'їзду</h1></td>
	        		<td><h1>Ціна </h1></td>
					<td><h1>Кількість днів<h1></td>
       		    </tr>

			<?php
				$db = "meridian1";
				
				$link = mysql_connect('localhost', 'user', 'user');
				if ( !$link )  die ("Неможливо підключитись до  MySQL");
				{	
					mysql_select_db($db,$link) or die ("Неможливо відкрити $db");
					$name_country =" ";$name_city=" ";$name_hotel=" ";$start_date=" ";$days=" ";$price=" ";
					$name_country = $_POST["name_country"];
	           		$name_city = $_POST["name_city"];
	           		$name_hotel = $_POST["name_hotel"];
	         		$start_date = $_POST["start_date"];
	            	$price = $_POST["price"];
					$days = $_POST["days"];
              		
					if($name_country!='' && $name_city != '' && $name_hotel !='' && $start_date !='' && $days !='' && $price !='')
					{
						$sql="insert into Countries(name_country) values('".$name_country."');";
						mysql_query($sql);
						$sql="insert into Cities(name_city) values('".$name_city."');";
						mysql_query($sql);
						$sql="insert into Hotels(name_hotel) values('".$name_hotel."');";
						mysql_query($sql);
						$sql="insert into Trips(start_date) values('".$start_date."');";
						mysql_query($sql);
						$sql="insert into Tours(price) values('".$price."');";
						mysql_query($sql);
						$sql="insert into info(id_country,id_city,id_hotel,start_date,price,days)   
						select Countries.id_country,Cities.id_city,Hotels.id_hotel,Trips.start_date,Tours.price ,'".$days."'  from Countries,Cities,Hotels,Trips,Tours  where Countries.name_country='".$name_country."' AND  Cities.name_city='".$name_city."' AND Hotels.name_hotel='".$name_hotel."' AND Trips.start_date='".$start_date."' AND Tours.price='".$price."';";
						$dod = mysql_query($sql) or die("insert into info ".mysql_error());
						
						if ($dod)
							{	
							echo 'Додано!'; $name_country =" ";$name_city =" "; $name_hotel=" ";$start_date=" ";  $price=""; $days=" ";
							}
								else echo 'Помилка при доданні ';
					
					}
					
				
				
			?>
					<?php
					
					$sql="select Countries.name_country,Cities.name_city,Hotels.name_hotel,Trips.start_date,info.days,Tours.price FROM info
					INNER JOIN Countries USING(id_country)			
					INNER JOIN Cities  USING(id_city)
					INNER JOIN Hotels USING(id_hotel)
					INNER JOIN Trips USING(start_date)			
					INNER JOIN Tours USING(price);";
					
			
						$dod=mysql_query($sql)or die(mysql_error());
						$count_rows=mysql_num_rows($dod);
						if($count_rows!=0)
					{
						while($data=mysql_fetch_array($dod,MYSQL_ASSOC))
						{
    						echo '<tr>';
							foreach($data as $value)
							{
								echo "<td>".$value."</td>";		
							}
							echo '</tr>';
						}	
					} else echo "<h3>Empty table</h3>";
						echo '</table>';
				}

				echo "<br>";
					?>
			<br>
			<br>

			<form action="" method="Post">
		   		<table class="table-two" cellpadding="15"   align=center >
					 <tr>
						 <td align="center" colspan="3"><h3>Додати нові тури </h3></td>
					 </tr>
					 <tr>
						<td>Країна  :</td>
			    		<td><input type=text name="name_country"  value="<?php if(name!="")echo $name_country?>"></td>
			        </tr>
			        <tr>
						<td>Місто:</td>
			  	        <td><input type=text name="name_city" value="<?php if(name!="")echo $name_city ?>" required></td>
			        </tr>
			        <tr>
						<td>Готель:</td>
			   	        <td><input type=text name="name_hotel"  value="<?php if(name!="")echo $name_hotel ?>" required></td>
			        </tr>
			        <tr>
			            <td> Дата в'їзду:</td>
			            <td><input type=text name="start_date"  value="<?php if(name!="")echo $start_date ?>" required></td>
			        </tr>
			        <tr>
			            <td>Кількість днів:</td>
			   	        <td><input type=text name="days"  value="<?php if(name!="")echo $days ?>" required></td>
			        </tr>
					<tr>
			            <td>Ціна:</td>
			   	        <td><input type=text name="price"  value="<?php if(name!="")echo $price ?>" required></td>
			        </tr>
			        <tr>
			            <td align="center" colspan="2"><input type=submit name="insert" value="Додати запис" class="buttonText"></td>
						
			        </tr>
		        </table>
            </form>
			
			
			
    
		</div>
  <!--end  main content-->

	<?php require_once("blocks/footer.php");?>
	
	</body>
</html>