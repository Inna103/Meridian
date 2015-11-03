<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <title>Творчість </title>
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
            <a href="index.php" class='words_menu ' >Головна</a>
            <a href="biography.php" class='words_menu'>Біографія</a>
			<a href="tvorchist.php" class='words_menu'>Творчість </a>
            <a href="portraits.php" class='words_menu'>Світлини</a>
		</div>
    </div>
	<?php require_once("blocks/header.php");?>
    <div class="width2">
        <div class="content" >
		 <br>
			<center class="h"> Вірші </center>
			<br>
			<br>
			
				<div class="left-menu">
					<ol>
						<li> <a href="#dymka"> "До тебе думка лине.."</a> </li>
						<li> <a href="#ochi"> "Коли дивлюсь глибоко в любі очі..."</a> </li>
						<li> <a href="#mriya"> "Мріє, не зрадь! Я так довго до тебе тужила..." </a> </li>
						<li> <a href="#obnyaty"> "Хотіла б я тебе, мов плющ, обняти..."</a> </li>
						<li> <a href="#ysi">" Усі говорять: 'він навіки згинув!..' "</a> </li>
						<li> <a href="#dytynou"> "Як дитиною, бувало"</a> </li>
						<li> <a href="#nehay"> "НЕХАЙ"</a> </li>
						<li> <a href="#zirka"> "Єсть у мене одна..." </a> </li>
						<li> <a href="#nadiya"> "Надія"</a> </li>
						<li> <a href="#zori">"Ви щасливі, пречистії зорі..."</a> </li>
					</ol>
				</div>
				<div class="verses">
					<div class="verse">
						<p>
							<a class="s"  name="dymka">"I все-таки до тебе думка лине..."</a>
						</p>
						<p>
						I  все-таки  до  тебе  думка  лине, <br>
						Мiй  занапащений,  нещасний  краю, <br>
						Як  я  тебе  згадаю,
						</p>
						<p>
						У  грудях  серце  з  туги,  з  жалю  гине.
						</p>
						<p>
						Сi  очi  бачили  скрiзь  лихо  i  насилля, <br>
						А  тяжчого  вiд  твого  не  видали, <br>
						Вони  б  над  ним  ридали,
						</p>
						<p>
						Та  сором  слiз,  що  ллються  вiд  безсилля.
						</p>
						<p>
						О,  слiз  таких  вже  вилито  чимало,  - <br>
						Країна  цiла  може  в  них  втопитись; <br>
						Доволi  вже  їм  литись,  - <br>
						Що  сльози  там,  де  навiть  кровi  мало!
						</p>
						<p>
						1895
						</p> 
					</div>
					<img align="center" src="0.png" >
					<br>
					<div class="verse">
						<p>
						<a class="s"  name="ochi">"Коли дивлюсь глибоко в любі очі..."</a>
						</p>
						<p>
						Коли  дивлюсь  глибоко  в  любі  очі, <br> 
						в  душі  цвітуть  якісь  квітки  урочі,<br>   
						в  душі  квітки  і  зорі  золотії,  <br> 
						а  на  устах  слова,  але  не  тії,  <br> 
						усе  не  ті,  що  мріються  мені,  <br> 
						коли  вночі  лежу  я  у  півсні.  <br> 
						Либонь,  тих  слів  немає  в  жодній  мові,  <br> 
						та  цілий  світ  живе  у  кожнім  слова, <br>  
						і  плачу  я  й  сміюсь,  тремчу  і  млію,  <br> 
						та  вголос  слів  тих  вимовить  не  вмію…  <br> 
						</p>
						<p>
						Якби  мені  достати  струн  живих,  <br>  
						якби  той  хист  мені,  щоб  грать  на  них,   <br> 
						потужну  пісню  я  б  на  струнах  грала,   <br> 
						нехай  би  скарби  всі  вона  зібрала,   <br> 
						ті  скарби,  що  лежать  в  душі  на  дні,   <br> 
						ті  скарби,  що  й  для  мене  таємні,   <br> 
						та  мріється,  що  так  вони  коштовні,   <br> 
						як  ті  слова,  що  вголос  невимовні.   <br> 
						</p>
						<p>
						Якби  я  всіми  барвами  владала, <br>  
						то  я  б  на  барву  барву  накладала  <br> 
						і  малювала  б  щирим  самоцвітом,  <br> 
						отак,  як  сонечко  пречисте  літом,  <br> 
						домовили  б  пророчистії  руки,  <br> 
						чого  домовить  не  здолали  гуки.  <br> 
						І  знав  би  ти,  що  є  в  душі  моїй…  <br> 
						Ох,  барв,  і  струн,  і  слів  бракує  їй… <br>  
						І  те,  що  в  ній  цвіте  весною  таємною,  <br> 
						либонь,  умре,  загине  враз  зо  мною.  <br> 
						</p>
						<p>
						2/IX  1904,  Тифліс  
						</p>
					</div>
					<img align="center" src="0.png" >
					<br>
					<div class="verse"> <p>
						<a class="s"  name="mriya">"Мріє, не зрадь! Я так довго до тебе тужила..."</a>
						</p>
						<p>
						Мріє,  не  зрадь!  Я  так  довго  до  тебе  тужила.  <br>
						Стільки  безрадісних  днів,  стільки  безсонних  ночей.  <br>
						А  тепер  я  в  тебе  остатню  надію  вложила.  
						</p>
						<p>
						Мріє,  не  зрадь!  Ти  ж  так  довго  лила  свої  чари  <br>
						в  серце  жадібне  моє,  сповнилось  серце  ущерть,  <br>
						вже  ж  тепера  мене  не  одіб’ють  від  тебе  примари,  <br>
						не  зляка  ні  страждання,  ні  горе,  ні  смерть.  
						</p>
						<p>
						Я  вже  давно  інших  мрій  відреклася  для  тебе.  <br>
						Се  ж  я  зрікаюсь  не  мрій,  я  зрікаюсь  життя.  <br>
						Вдарив  час,  я  душею  повстала  сама  проти  себе,  <br>
						і  тепер  вже  немає  мені  вороття.  
						</p>
						<p>
						Тільки  —  життя  за  життя!  Мріє,  станься  живою!  <br>
						Слово,  коли  ти  живе,  статися  тілом  пора.  <br>
						Хто  моря  переплив  і  спалив  кораблі  за  собою,  <br>
						той  не  вмре,  не  здобувши  нового  добра.  
						</p>
						<p>
						Мріє,  колись  ти  літала  орлом  надо  мною,  —  <br>
						дай  мені  крила  свої,  хочу  їх  мати  сама,  <br>
						хочу  дихать  вогнем,  хочу  жити  твоєю  весною,  <br>
						а  як  прийдеться  згинуть  за  теє  —  дарма!  
						</p>
						<p>
						8/VIII  1905
						</p> 
					</div>
					<img align="center" src="0.png" >
					<br>
					<div class="verse">
						<p>
						<a class="s"  name="obnyaty">"Хотіла б я тебе, мов плющ, обняти..."</a>
						</p>
						<p>
						Хотіла  б  я  тебе,  мов  плющ,  обняти,<br>  
						Так  міцно,  щільно,  і  закрить  од  світа,  <br>
						Я  не  боюсь  тобі  життя  одняти,  <br>
						Ти  будеш  мов  руїна,  листом  вкрита,  —  
						</p>
						<p>
						Плющ  їй  дає  життя,  він  обіймає, <br> 
						Боронить  від  негоди  стіну  голу,  <br>
						Але  й  руїна  стало  так  тримає  <br>
						Товариша,  аби  не  впав  додолу. 
						</p>
						<p>
						Їм  добре  так  удвох,  —  як  нам  з  тобою,  —  <br>
						А  прийде  час  розсипатись  руїні,  —  <br>
						Нехай  вона  плюща  сховає  під  собою.  <br>
						Навіщо  здався  плющ  у  самотині?  
						</p>
						<p>
						Хіба  на  те,  аби  валятись  долі  <br>
						Пораненим,  пошарпаним,  без  сили  <br>
						Чи  з  розпачу  повитись  на  тополі  <br>
						І  статися  для  неї  гірш  могили?  
						</p>
						<p>
						1900 
						</p>
					</div>
					<img align="center" src="0.png" >
					<br>
					<div class="verse">
						<p>
						<a class="s"  name="ysi">Усі говорять: “він навіки згинув!.."</a>
						</p>
						<p>
						Усі  говорять:  “він  навіки  згинув!”  <br> 
						А  серце  каже:  “ні,  він  не  покинув!”   <br>
						Ти  чуєш,  як  бринить  струна  якась  тремтяча?   <br>
						Тремтить-бринить,  немов  сльоза  гаряча,   <br>
						Тут,  в  глибині,  і  б’ється  враз  зі  мною:  <br> 
						“Я  тут,  я  завжди  тут,  я  все  з  тобою!”  
						</p>
						<p>
						Так,  завжди,  чи  в  піснях  забути  хочу  муку,  <br> 
						Чи  хто  мені  стискає  дружньо  руку,   <br>
						Чи  любая  розмова  з  ким  ведеться,   <br>
						Чи  поцілунок  на  устах  озветься,   <br>
						Струна  бринить  лагідною  луною:   <br>
						“Я  тут,  я  завжди  тут,  я  все  з  тобою!”  
						</p>
						<p>
						Чи  я  спущусь  в  безодні  мрій  таємні,   <br>
						Де  постаті  леліють  ясні  й  темні,   <br>
						Незнані  й  знані,  і  наводять  чари, <br>  
						І  душу  опановують  примари,   <br>
						А  голос  твій  бринить,  співа  з  журбою:  <br> 
						“Я  тут,  я  завжди  тут,  я  все  з  тобою!”  
						</p>
						<p>
						Чи  сон  мені  склепить  помалу  вії,  <br> 
						Покриє  очі,  втомлені  від  мрії,   <br>
						Та  крізь  важкі,  ворожії  сновиддя   <br>
						Я  чую  голос  любого  привиддя,   <br>
						Бринить  тужливо  з  дивною  журбою:   <br>
						“Я  тут,  я  завжди  тут,  я  все  з  тобою!”  
						</p>
						<p>
						І  кожний  раз,  як  стане  він  бриніти, <br>  
						Тремтять  в  моєму  серці  тії  квіти,   <br>
						Що  ти  не  міг  їх  за  життя  зірвати,  <br> 
						Що  ти  не  хтів  їх  у  труну  сховати,   <br>
						Тремтять  і  промовляють  враз  зо  мною:   <br>
						“Тебе  нема,  але  я  все  з  тобою!”  
						</p>
						<p>
						Kimpolung,  7/VI  1901  
						</p>
					</div>
					<img align="center" src="0.png" >
					<br>
					<div class="verse"> 
						<p>
						<a class="s"  name="dytynou">"Як дитиною, бувало"</a>
						</p>
						<p>
						Як дитиною, бувало, <br>
						Упаду, собі на лихо, <br>
						То хоч в серце біль доходив, <br>
						Я собі вставала тихо.
						</p>
						<p>
						«Що, болить?» — мене питали <br>
						Але я не признавалась — <br>
						Я була малою горда,— <br>
						Щоб не плакать, я сміялась.
						</p>
						<p>
						А тепер, коли для мене <br>
						Жартом злим кінчиться драма <br>
						І от-от зірватись має <br>
						Гостра, злобна епіграма,—
						</p>
						<p>
						Безпощадній зброї сміху <br>
						Я боюся піддаватись, <br>
						І, забувши давню гордість, <br>
						Плачу я, щоб не сміятись.
						</p>
					</div>
					<img align="center" src="0.png" >
					<br>
					<div class="verse"> 
						<p>
						<a class="s"  name="nehay">"НЕХАЙ"</a>
						</p>
						<p>
						Так, ми раби немає гірших в світі!<br>
						Феллаги, парії щасливіші від нас.<br>
						Бо в них і розум, і думки сповиті,<br>
						А в нас вогонь Тітана ще не згас.
						</p>
						<p>
						Ми паралітики з блискучими очима.<br>
						Великі духом, силою малі.<br>
						Орлині крила чуєм за плечима.<br>
						Сами ж кайданами прикуті до землі.
						</p>
						<p>
						Ми навіть власної не маєм хати.<br>
						Усе одкрите в нас тюремним ключарам:<br>
						Не нам, обідраним невільникам казати<br>
						Речення гордеє "Мій дом — мій храм!"
						</p>
						<p>
						Народ наш, мов дитя сліпеє зроду.<br>
						Ніколи світа-сонця не видав.<br>
						За ворогів іде в огонь і в воду.<br>
						Катам своїх поводарів оддав.
						</p>
						<p>
						Одвага наша — меч, политий кров'ю.<br>
						Брязчить у піхвах, ржа його взяла.<br>
						Чия рука, порушена любов'ю.<br>
						Той меч із піхви видобуть здола?
						</p>
						<p>
						Нехай же ми раби, невільники продажні.<br>
						Без сорому, без чести — хай же так!<br>
						А хто ж були ті вояки одважні,<br>
						Що їх зібрав під прапор свій Спартак?..	
						</p>
					</div>
					<img align="center" src="0.png" >
					<br>
					<div class="verse"> <p>
						<a class="s"  name="zirka">"Єсть у мене одна..."</a>
						</p>
						<p>
						Єсть  у  мене  одна  <br>
						Розпачлива,  сумна, <br> 
						Одинокая  зірка  ясная; <br> 
						Сеї  ж  ночі  дарма  <br>
						Її  кличу,  —  нема!  <br>
						Я  стою  у  журбі  самотная. <br> 
						І  шукаю  вгорі <br> 
						Я  тієї  зорі:  <br>
						“Ох,  зійди,  моя  зірко  лагідна?” <br> 
						Але  зорі  мені  <br>
						Шлють  проміння  сумні: <br> 
						“Не  шукай  її,  дівчино  бідна!”  
					</div>
					<img align="center" src="0.png" >
					<br>
					<div class="verse"> 
						<p>
						<a class="s"  name="nadiya">"Надія"</a>
						</p>
						<p>
						Ні долі, ні волі у мене нема,<br> 
						Зосталася тільки надія одна:
						</p>
						<p>
						Надія вернутись ще раз на Вкраїну,<br> 
						Поглянути ще раз на рідну країну,
						</p>
						<p>
						Поглянути ще раз на синій Дніпро, –<br> 
						Там жити чи вмерти, мені все одно;
						</p>
						<p>
						Поглянути ще раз на степ, могилки,<br> 
						Востаннє згадати палкії гадки…
						</p>
						<p>
						Ні долі, ні волі у мене нема,<br> 
						Зосталася тільки надія одна.
						</p>
					</div>
					<img align="center" src="0.png" >
					<br>
					<div class="verse">
						<p><a class="s" name="zori">"Ви щасливі, пречистії зорі..."</a></p>
						<p>
						Ви щасливі, пречистії зорі,<br>
						ваші промені – ваша розмова;<br>
						якби я ваші промені мала,<br>
						я б ніколи не мовила слова.
						</p>
						<p>
						Ви щасливі, високії зорі,<br>
						все на світі вам видко звисока;<br>
						якби я так високо стояла,<br>
						хай була б я весь вік одинока.
						</p>
						<p>
						Ви щасливі, холоднії зорі,<br>
						ясні, тверді, неначе з кришталю;<br>
						якби я була зіркою в небі,<br>
						я б не знала ні туги , ні жалю.
						</p>
						<br>
						<br>
					</div>
				</div>
			
		</div>
	</div>
	<?php require_once("blocks/footer.php");?>
</body>
</html>