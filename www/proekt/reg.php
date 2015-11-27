<html>
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
				<a href="pro_nas.php" class='words_menu'>Про нас</a>
				<a href="" class='words_menu'>Відгуки </a>
				<a href="contact.php" class='words_menu'>Контакти</a>
				<a href="user.php" class='words_menu'>Користувачу</a>
			</ul>
		</div>
    <body>
  <h2>Регистрация</h2>
    <form class="reg" action="save_user.php" method="post">
    <!--**** save_user.php - это адрес обработчика.  То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей  отправятся на страничку save_user.php методом "post" ***** -->
	<fieldset><legend>Дані:</legend>
<table border="0" cellspacing="10">
<tr>
<td>Введіть логін:</td>
<td><input type="text" name="login" required size="20" maxlength="50" placeholder="login" ></td>
</tr>
<tr>
<td>Введіть пароль: </td>
<td><input type="password" name="password" required size="20" maxlength="50" placeholder="password"></td>
</tr>
<tr>
<td>Повторіть пароль:</td>
<td><input type="password" name="repass" required size="20" maxlength="50" placeholder="password"></td>
<td><input type="submit" value="Перевірити пароль" onclick="if(pass.value == repass.value){alert('Пароль вірний')} else{alert('Пароль НЕ вірний')} "> </td>
</tr>
<tr><td></td><td></td></tr>
<!--

<tr>
<td>Ваша стать:</td>
<td><select name="male" size="1">
<option selected value="male">чоловік
<option value="female">жінка
</select>
</td>
</tr>


<tr>
<td>Дата народження:</td>
<td><select name="ageyear" size="1">
<option selected value="2000">2000
<option value="1999">1999
<option value="1998">1998
<option value="1997">1997
<option value="1996">1996
<option value="1995">1995
<option value="1994">1994
<option value="1993">1993
<option value="1992">1992
<option value="1991">1991
<option value="1990">1990
<option value="1989">1989
<option value="1988">1988
<option value="1987">1987
<option value="1986">1986
<option value="1985">1985
<option value="1984">1984
<option value="1983">1983
<option value="1982">1982
<option value="1981">1981
<option value="1980">1980
<option value="1979">1979
<option value="1978">1978
</select>

<select name="agemonth" size="1">
<option selected value="01">01
<option value="02">02
<option value="03">03
<option value="04">04
<option value="05">05
<option value="06">06
<option value="07">07
<option value="08">08
<option value="09">09
<option value="10">10
<option value="11">11
<option value="12">12
</select>
<select name="ageday" size="1">
<option selected value="1">1
<option value="2">2
<option value="3">3
<option value="4">4
<option value="5">5
<option value="6">6
<option value="7">7
<option value="8">8
<option value="9">9
<option value="10">10
<option value="11">11
<option value="12">12
<option value="13">13
<option value="14">14
<option value="15">15
<option value="16">16
<option value="17">17
<option value="18">18
<option value="19">19
<option value="20">20
<option value="21">21
<option value="22">22
<option value="23">23
<option value="24">24
<option value="25">25
<option value="26">26
<option value="27">27
<option value="28">28
<option value="29">29
<option value="30">30
<option value="31">31
</select>
</td>
</tr>-->
</table>
<!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** --> 
<p>
    <input type="submit" name="submit" value="Зарегистрироваться">
<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** --> 
</p></form>
    </body>

    </html>