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
				<form action="search.php" class="form-wrapper">
					<input value="Пошук туру по країні" id="submit" type="submit">	
				</form>
						
				<table class="table-one" border="1" cellpadding=15 align=center >
	    		<tr  style="background:#31b2c3">
            		<td><h2>Країна </h2></td>
            		<td><h2>Місто </h2></td>
           	       	<td><h2>Готель </h2></td>
	        		<td><h2>Дата в'їзду </h2></td>
					<td><h2>Кількість днів </h2></td>
	        		<td style="position:relative;"><h2>Ціна </h2>
	        			<form action="sort_up.php" style="position:absolute;top:20px; right: 20px;">
							<input type="image" src="up.png" style=" height:20px;" >	
				        </form>
						<form action="sort_down.php" style="position:absolute;top:20px; right: 35px;">
							<input type="image" src="down.png" style=" height:20px;" >	
				        </form>
				    </td>
					<?php
						if(isset($_SESSION['login']))
						{
							echo "<td>Забронювати</td>";
						}
					?>
					
       		    </tr>

			<?php
				
				$db = "meridian2";
				$link = mysql_connect('localhost', 'user', 'user');
					if ( !$link )  die ("Неможливо підключитись до  MySQL");
					{	
						
						mysql_select_db($db,$link) or die ("Неможливо відкрити $db");
						if(isset($_POST["insert"])){
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
									
								$sql="insert into Cities(name_city,id_country) values('".$name_city."',(Select id_country  from Countries where name_country='".$name_country."'));";
								 mysql_query($sql);
								$sql="insert into Hotels(name_hotel,id_city) values('".$name_hotel."',(Select id_city  from Cities where name_city='".$name_city."'));";
									 mysql_query($sql);
								$sql="insert into Tours(id_country,id_city,id_hotel,start_date,price,days)   
								select Countries.id_country,Cities.id_city,Hotels.id_hotel,'".$start_date."' ,'".$price."' ,'".$days."'  from Countries,Cities,Hotels  where Countries.name_country='".$name_country."' AND  Cities.name_city='".$name_city."' AND Hotels.name_hotel='".$name_hotel."';";
								//$sql="INSERT INTO Tours(id_country,id_city,id_hotel,start_date,price,days) VALUES ('$id_country','$id_city','$id_hotel','".$start_date."' ,'".$price."' ,'".$days."')";
								$dod = mysql_query($sql) or die("insert into Tours ".mysql_error());
									
								
								if ($dod)
									{	
									 $name_country =" ";$name_city =" "; $name_hotel=" ";$start_date=" ";  $price=""; $days=" ";
									}
										else echo 'Помилка при доданні ';
							
							}
						}
			
				
			?>
					<?php
					
					$sql="select Countries.name_country,Cities.name_city,Hotels.name_hotel,Tours.start_date,Tours.days,Tours.price FROM Tours
					INNER JOIN Countries USING(id_country)			
					INNER JOIN Cities  USING(id_city)
					INNER JOIN Hotels USING(id_hotel);";
					
			
						$dod=mysql_query($sql)or die(mysql_error());
						$count_rows=mysql_num_rows($dod);
						if($count_rows!=0)
					{
						while($data=mysql_fetch_array($dod,MYSQL_ASSOC))
						{
    						echo '<tr>';
							$id_tour = $data['id_tour'];//потом должны заполнить при каждом новом рядке
							$id_user_bron =$data['id_user_bron'];
							foreach($data as $value)
							{
								echo "<td>".$value."</td>";		
							}
					echo $id_user_bron;
								if(isset($_SESSION['login']))
								{  
									if($_SESSION['admin']==1){
										if($id_user_bron!=0) echo "Show user login";
											else echo "<td>вільно</td>";
										
									}
									else{
										if($id_user_bron!=0) echo "Заброньовано"; //+ перевирка чи сам вин не забронював
											else echo "<td><a href='/proekt/bron.php?login=".$_SESSION['login']."&id_tour=".$id_tour."'>Забронювати</a></td>" ;
									}
								}
							
							echo '</tr>';
						}	
					} else echo "";
						echo '</table>';
				}

				echo "<br>";
					?>
			<br>
			<br>
			<?php
				if($_SESSION['admin']==1){
					?>
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
								<td> Дата в`їзду:</td>
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
						
					<?php
				}
			?>
			
			
    
		</div>
  <!--end  main content-->

	<?php require_once("blocks/footer.php");?>
	
	</body>
</html>