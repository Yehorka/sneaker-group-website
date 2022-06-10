<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title>Sneaker-group-shop</title>
	<link rel="stylesheet" href="styles/styles.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&family=Source+Sans+3:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&family=Stick+No+Bills&display=swap" rel="stylesheet">
	<script src="js/script.js"></script>
	<script src="https://kit.fontawesome.com/b17a47ede9.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="bg">
		<div class="beige_bg">
			<div class="dotted_vert1"></div>
			<div class="dotted_vert2"></div>
			<header> 
				<div class="header">
				<div class="logo">
				<div style="width:36px; height: 36px; background-color: #C0C0C0"></div>
				<h1><a href="index.php">SNEAKER-GROUP</a></h1>
				<div style="width:36px; height: 36px; background-color: #C0C0C0"></div>
				</div>
				<div class="links">
					<a href="about-us.php">про нас</a>
					<a href="contact.php">контакти</a>
					<a href="shop.php">каталог</a>
				</div>
			</div>
			<hr class="grayline">  
			</header>
			<div class="shop_group">
				<h2>Асортимент</h2>
				<hr class="grayline">
				<div id="container">
					<div class="product">
						<div class="prod">
						<img class="prodimg" src="images/airjordan1.png">
							<p>AIR JORDAN 1 Retro OG</p>
						</div>
						<div class="toshoprect">
							<img class="shoppingcart" src="images/shopping-bag.png" onClick="show('airjordan1')" role="button">
					</div>
					</div>
					<div class="product">
						<div class="prod">
						<img class="prodimg" src="images/airjordan1.png">
							<p>AIR JORDAN 1 Retro OG</p>
						</div>
						<div class="toshoprect">
							<img class="shoppingcart" src="images/shopping-bag.png"  onClick="show('airjordan1')" role="button">
					</div>
					</div>
					<div class="product">
						<div class="prod">
						<img class="prodimg" src="images/airjordan1.png">
							<p>AIR JORDAN 1 Retro OG</p>
						</div>
						<div class="toshoprect">
							<img class="shoppingcart" src="images/shopping-bag.png"  onClick="show('airjordan1')" role="button"">
					</div>
					</div>
					</div>
				</div>
				
			
			<hr class="grayline">
			<div class="footer">
				<div class="footer-box">
					<a href="shop.php">
						<img class="footer_shop" src="images/shop.png">
					</a>
					<a href="about-us.php">
						<img class="footer_about" src="images/about.png">
					</a>
					<a href="contacts.php">
						<img class="footer_cont" src="images/cont.png">
					</a>
				</div>
				sneaker-group.com
			</div>
		</div>
		<div class="red_bg">
			<img class="menu_button" src="images/Group 5.png" onClick="show('menu')" role="button">
		</div>
		</div>
		<div class="popup" id="menu">
		<i class="fa-solid fa-xmark fa-sm" onclick="hide('menu')" role="button"></i>
			<p><a href="shop.php" class="menu_item">каталог</a></p>
			<p><a href="contact.php" class="menu_item">контакти</a></p>
			<p><a href="about-us.php" class="menu_item">про нас</a></p>
		</div>
	<div class="popup" id="airjordan1">
		<i class="fa-solid fa-xmark fa-sm" onclick="hide('airjordan1')" role="button"></i>
		<div class="popup_group">
			<img src="images/airjordan1.png">
		 	<div class="right-column">
			<h2>AIR JORDAN 1 Retro OG</h2>
			<img class="sizes" src="images/sizes.png">
			<h2>7889₴</h2>
			<img class="buy_button" src="images/Group 22.png">
			</div>
		</div>
		<div class="description">
			Кросівки AIR JORDAN 1 RETRO HIGH OG - це функціональна модель взуття, призначена для аматорських та професійних баскетбольних тренувань. Зроблені тільки з якісних матеріалів, є зносостійкими та зручними в експлуатації.
Зовні взуття виконане зі шкіри, є перфорація в області носка для бездоганної вентиляції ваших ніг;
Усередині м'яка текстильна підкладка, устілка, що дихає;
Підошва з піноматеріалу, прихований балон для амортизації за технологією Air. Гумова підмітка з чіпким візерунком протектора для покращення зчеплення.
		</div>
		
	</div>
</body>
</html>
