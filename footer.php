<!doctype html>
<html>
<body>
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
        <form action="?page=contact" method="POST">
            <i class="fa-solid fa-xmark fa-sm" onclick="hide('call_me')" role="button"></i>
            <p>Введіть свій номер і ми вам зателефонуємо</p>
            <div class="call_me_grid">
                <input name="tel" type="text" placeholder="Введіть номер мобільного телефону">
                <button class="red_phone" type="submit"><i class="fa-solid fa-phone" type="submit"
                        onclick="hide('call_me')" role="button"></i></button>
            </div>
        </form>
		
    </div>
		<div class="popup" id="menu">
		<i class="fa-solid fa-xmark fa-sm" onclick="hide('menu')" role="button"></i>
			<p><a href="?page=shop" class="menu_item">каталог</a></p>
			<p><a href="?page=contact" class="menu_item">контакти</a></p>
			<p><a href="?page=about-us" class="menu_item">про нас</a></p>
		</div>
	
</body>
</html>
