<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title>Sneaker-group</title>
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
			<div class="group3">
				<div class="left-column">
					<img class="jordan3" src="images/image3.png">
				</div>
				
				<div class="right-column">
					<div class="inner-group">
						<div class="boldtext-field">
							Ми піклуємося про наших клієнтів і робимо безкоштовні консультації для кожного. Ноги у всіх різні, і на них повинні бути ідеальні кросівки.
				    	</div>
						<div class="fish">SNEAKER GROUP 07.02.2022</div>
					</div>
					<h1>Наші контакти</h1>
					<div class="inner-group">
						<div class="left-column">
							<h4>+380963267933 - для консультації</h4>
							<h4>+380963268932 - для співпраці</h4>
							<h4>Електронна пошта:
							<p>sneakr@sneaker-group.com</p></h4></div>
						<div class="right-column">
							наша адреса:
							Oststr. 36 40211 Duesseldorf 
							Germany
						</div>
					
				</div>
					<img class="to_call" src="images/to_call.png" onclick="show('call_me')" role="button">
					
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
	<div class="popup" id="call_me">
		<i class="fa-solid fa-xmark fa-sm" onclick="hide('call_me')" role="button"></i>
  		<p>Введіть свій номер і ми вам зателефонуємо</p>
		<div class="call_me_grid">
		<input type="text">
		<div class="red_phone"><i class="fa-solid fa-phone" onclick="hide('call_me')" role="button"></i></div>
		</div>
		</div>
		<div class="popup" id="menu">
		<i class="fa-solid fa-xmark fa-sm" onclick="hide('menu')" role="button"></i>
			<p><a href="shop.php" class="menu_item">каталог</a></p>
			<p><a href="contact.php" class="menu_item">контакти</a></p>
			<p><a href="about-us.php" class="menu_item">про нас</a></p>
		</div>
	
</body>
</html>