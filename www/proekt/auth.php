<?php
function ConnectDB()
	{
		require("../../conf/config.php");
		mysql_connect($host,$user,$pass)or die(mysql_error());
		mysql_select_db($db)or die(mysql_error());
	}
function admin($login)
	{
		ConnectDB();
		$sql="select admin from users 
		Where login = '".$login."' ";
		$num=mysql_query($sql);
		if(mysql_num_rows($num)==0) return -1;
		$data= mysql_fetch_array($num,MYSQL_ASSOC);
		return $data["admin"];
	}
function user($login,$pass)
	{
		ConnectDB();
		$sql="select id_user from users Where login = '".$login."' and password = '".$pass."' ";
		$num=mysql_query($sql);
		if(mysql_num_rows($num)==0) return 0;
		$data= mysql_fetch_array($num,MYSQL_ASSOC);
		return $data["id_user"];
		//echo "Здравствуйте, ".$data["login"];
	}
session_start();
	if(isset($_POST["sign_in"]))
	{
		$login=$_POST['login'];
		$pass=$_POST['password'];
		$user=user($login,$pass);
		$admin=admin($login);
		if($user!=0 && $admin==1)
		{
			$_SESSION['login'] = $login;
			$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
			$_SESSION['admin'] = $admin;
		}
		if($user!=0)
		{
			$_SESSION['login'] = $login;
		}
		header("Location: index.php");
		exit;
		
	}
	if(isset($_POST["logout"]))
	{
		session_start();
		session_destroy();
		header("Location: index.php");
		exit;
	}
?>