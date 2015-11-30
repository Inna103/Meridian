<?php session_start();

if($_SESSION['login']==$_GET['login'])  
   {
     $sql= "Update  Tours set id_user_bron = (Select id_user from users where login = " . $_GET['login'] . ")where id_tour  = ". $_GET['id_tour'] .")";
    
	$name = $_SESSION['login'];
	 echo mysql_query($sql);
	 mysql_error();
	
	 $mess= "Шановний $name, Ваша заявка була успішно прийнята."; 
 
         echo "<center>$mess</center> ";

    header('Refresh: 5; URL=http://meridian/proekt/user.php'); 
    echo '<center>Через кілька секунд ви будете перенаправлені на попередню сторінку.</center>'; 
  exit;
    }
?>