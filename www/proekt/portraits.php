<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <title>Леся українка </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles/style.css">    
</head>
<body class="page">
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
    <div class="width">
        <div class="menu">
            <a href="index.php" class='words_menu' >Головна</a>
            <a href="biography.php" class='words_menu'>Біографія</a>
			<a href="tvorchist.php" class='words_menu'>Творчість </a>
            <a href="portraits.php" class='words_menu '>Світлини</a>
        </div>
    </div>
	<?php require_once("blocks/header.php");?>
    <div class="width2">
        <div class="content">
			<?php
				if(isset($_SESSION['admin']))require_once "blocks/add_pictures.php";
				$dir = opendir ( "images/pictures/");
				while ($file = readdir ($dir)) 
				{
					if (( $file != ".") && ($file != ".."))
					{
						list($width, $height) = getimagesize( "images/pictures/".$file);
						$s='<img align="center" src="images/pictures/'.$file.'"  alt="Lesya Ukrainka"';
						
						$s.=' >';
						echo $s;
					}
				}
				closedir ($dir);
			?>
		</div>
	</div>
	<?php require_once("blocks/footer.php");?>
</body>
</html>