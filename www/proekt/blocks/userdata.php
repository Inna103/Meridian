<?php session_start();?>
<form action="auth.php" method="POST">
<?if(isset($_SESSION['login']))
{ $name = $_SESSION['login'];
$mess= "Привіт, $name";
echo "<center>$mess</center> ";
	}
?>
		 <input class="button" type="submit" name="logout" value="Вихід" required>
</form>
