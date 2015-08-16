<!DOCTYPE html>
<html>
<head>
	<title>Shop</title>
	
	<?php
		include('inc/head.php');
	?>
</head>

<body>


	<?php
		include('inc/top.php');
	?>

	<div id="breadcrumbs" class="wrapper">
		<div class="container_12 breadcrumb">
			<ul class="grid_12">
				<li><a href="#">Home</a></li>
				<li>Shop</li>
			</ul>
			<div class="clear"></div>
		</div>
	</div>
	
	<div class="wrapper" id="mainContent">
		<div class="container_12 sideNavContainer">
			<div class="heroPanelWrap grid_3_w">
				<div class="heroPanelInner">
					<h1>Our Shop</h1>
					<div class="clear"></div>
					<div class="tabNavigation"></div>
					<span class="indicator"></span>
					<div class="tabs">
						<div class="tab">
							<img src="img/content/xmascards.jpg" alt="A variety of Christmas cards">
							<p class="tabTitle">Early Bird Christmas Cards</p>
						</div>
						<div class="tab">
							<img src="img/content/scary.jpg" height="393" width="745" alt="6 runners in halloween fancy dress">
							<p class="tabTitle">Lorem Ipsum</p>
							<div class="caption">
								<h3>Congratulations to our Spooky Sprint London Runners</h3>
								<a href="#">Take part in upcoming runs</a>
								<a href="#">Why not take part?</a>
							</div>
						</div>
						<div class="tab">
							<img src="img/content/scary.jpg" height="393" width="745" alt="6 runners in halloween fancy dress">
							<p class="tabTitle">Parkinson's Mug</p>
							<div class="caption">
								<h3>Other text goes here</h3>
								<a href="#">Why not take part?</a>
							</div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			
			<div class="sideBar">
				<div class="box searchBox">
					<form action="#">
						<fieldset>
							<legend>Search the shop</legend>
							<label for="searchShop" class="hide">Enter keywords</label>
							<input type="text" placeholder="Keyword" id="searchShop"/>
							<input type="submit" value="Go" class="cta"/>
						</fieldset>
					</form>
					<h4>Our favourite categories</h4>
					<ul class="faveCategories">
						<li><a href="#">Practical things</a></li>
						<li><a href="#">Christmas cards</a></li>
						<li><a href="#">Gifts for everyone</a></li>
						<li><a href="#">Garden and home</a></li>
					</ul>
					<div class="clear"></div>
				</div>
				<div class="box">
					<h4>Shop by category</h4>
					<ul class="shopCategories">
						<li><a href="#">Brain-themed gifts</a></li>
						<li><a href="#">Christmas cards</a></li>
						<li><a href="#">Festive home</a></li>
						<li><a href="#">Festive food treats</a></li>
						<li class="subCategory">
							<ul>
								<li><a href="#">Maecenas luctus</a></li>
								<li><a href="#">Lorem eu orci</a></li>
								<li><a href="#">Euismod viverra</a></li>
								<li><a href="#">Vestibulum ornae</a></li>
								<li><a href="#">Suscipit elementum</a></li>
								<li class="seeAll"><a href="#">See all</a></li>
							</ul>
						</li>
						<li><a href="#">Garden and home</a></li>
						<li><a href="#">Gifts for everyone</a></li>
						<li><a href="#">Parkinson's UK products</a></li>
						<li><a href="#">Party gifts and fun</a></li>
						<li><a href="#">Party downloads</a></li>
						<li><a href="#">Practical products</a></li>
						<li><a href="#">Stocking fillers</a></li>
						<li><a href="#">Wedding favours</a></li>
						<li class="subCategory">
							<ul>
								<li><a href="#">Maecenas luctus</a></li>
								<li><a href="#">Lorem eu orci</a></li>
								<li><a href="#">Euismod viverra</a></li>
								<li><a href="#">Vestibulum ornae</a></li>
								<li><a href="#">Suscipit elementum</a></li>
								<li class="seeAll"><a href="#">See all</a></li>
							</ul>
						</li>
						<li><a href="#">Wrap and stationery</a></li>
					</ul>
				</div>
				<div class="box">
					<h4>About the shop</h4>
					<ul class="linkList">
						<li><a href="#">Delivery</a></li>
						<li><a href="#">Returns</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Log in</a></li>
						<li><a href="#">Register</a></li>
					</ul>
				</div>
				<div class="box">
					<h4>Payment methods</h4>
					<div class="paymentMethods">
						<img src="img/frame/paypal.png" alt="PayPal">
						<img src="img/frame/visa.png" alt="Visa">
						<img src="img/frame/mastercard.png" alt="MasterCard">
						<img src="img/frame/amex.png" alt="American Express">
						<img src="img/frame/discover.png" alt="Discover">
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="wrapper waffle">
		<div class="container_12 shadow">
			<h2 class="grid_3_w">Best Sellers</h2>
			<div class="clear"></div>
			<div class="grid_1_w box">
				<h3><a href="#">500 strange but true facts</a></h3>
				<p class="extraInfo"><strong>£4.99</strong></p>
				<a href="#"><img src="img/content/strangeButTrue.jpg" height="112" width="202" alt="Strange But True Facts Book"></a>
				<p>How our 5-year strategy is advancing our search for a cure</p>
				<a href="#" class="cta">Add to basket</a>
			</div>
			<div class="grid_1_w box">
				<h3><a href="#">Thirty days has September</a></h3>
				<p class="extraInfo"><strong>£7.99</strong></p>
				<img src="img/content/thirtyDays.jpg" height="112" width="202" alt="Thirty Days Has September Book">
				<p>Get involved in research and support our groundbreaking work</p>
				<a href="#" class="cta">Add to basket</a>
			</div>
			<div class="grid_1_w box">
				<h3><a href="#">Pocket posh jumble brain busters</a></h3>
				<p class="extraInfo"><strong>£5.99</strong></p>
				<img src="img/content/pocketJumble.jpg" height="112" width="202" alt="Pocket Posh Jumble Brain Busters Book">
				<p>Discoveries that have led to better treatments and care of people living with Parkinson's</p>
				<a href="#" class="cta">Add to basket</a>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="wrapper">
		<div class="container_12 shadow">
			<h2 class="grid_3_w">Special Offers</h2>
			<div class="clear"></div>
			<div class="grid_1_w box">
				<h3><a href="#">500 strange but true facts</a>£4.99</h3>
				<a href="#"><img src="img/content/strangeButTrue_wht.jpg" height="112" width="202" alt="Strange But True Facts Book"></a>
				<p>How our 5-year strategy is advancing our search for a cure</p>
				<a href="#" class="cta">Add to basket</a>
			</div>
			<div class="grid_1_w box">
				<h3><a href="#">Thirty days has September</a>£7.99</h3>
				<img src="img/content/thirtyDays_wht.jpg" height="112" width="202" alt="Thirty Days Has September Book">
				<p>Get involved in research and support our groundbreaking work</p>
				<a href="#" class="cta">Add to basket</a>
			</div>
			<div class="grid_1_w box">
				<h3><a href="#">Pocket posh jumble brain busters</a>£5.99</h3>
				<img src="img/content/pocketJumble_wht.jpg" height="112" width="202" alt="Pocket Posh Jumble Brain Busters Book">
				<p>Discoveries that have led to better treatments and care of people living with Parkinson's</p>
				<a href="#" class="cta">Add to basket</a>
			</div>
			<div class="clear"></div>
			<div class="grid_3_w">
				<a href="#" class="cta floatRight">See all offers</a>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="wrapper">
		<div class="container_12 shadow">
			<h2 class="grid_3_w">Partner Offers</h2>
			<div class="clear"></div>
			<div class="grid_1_w box">
				<h3><a href="#">500 strange but true facts</a>£4.99</h3>
				<a href="#"><img src="img/content/strangeButTrue_wht.jpg" height="112" width="202" alt="Strange But True Facts Book"></a>
				<p>How our 5-year strategy is advancing our search for a cure</p>
				<a href="#" class="cta">Add to basket</a>
			</div>
			<div class="grid_1_w box">
				<h3><a href="#">Thirty days has September</a>£7.99</h3>
				<img src="img/content/thirtyDays_wht.jpg" height="112" width="202" alt="Thirty Days Has September Book">
				<p>Get involved in research and support our groundbreaking work</p>
				<a href="#" class="cta">Add to basket</a>
			</div>
			<div class="grid_1_w box">
				<h3><a href="#">Pocket posh jumble brain busters</a>£5.99</h3>
				<img src="img/content/pocketJumble_wht.jpg" height="112" width="202" alt="Pocket Posh Jumble Brain Busters Book">
				<p>Discoveries that have led to better treatments and care of people living with Parkinson's</p>
				<a href="#" class="cta">Add to basket</a>
			</div>
			<div class="clear"></div>
			<div class="grid_3_w">
				<a href="#" class="cta floatRight">See all offers</a>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="wrapper">
		<div class="container_12 shadow">
			<div class="grid_1_w box">
				<h3>Got a question about our products or purchasing online?</h3>
				<p>Call us on 0800 123 4567 or email shop@parkinsons.org.uk</p>
				<a class="ctaInline" href="#">See our shop FAQs</a>
			</div>
			<div class="grid_1_w box">
				<h3>Other ways to help</h3>
				<p>Omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
				<a class="ctaInline" href="#">Get involved</a>
			</div>
			<div class="grid_1_w box">
				<h3>How your money makes a difference</h3>
				<p>By buying or products you are helping omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
				<a class="ctaInline" href="#">Find out more about how we help</a>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	
	<?php
		include('inc/footer.php');
	?>

	<?php
		include('inc/scripts.php');
	?>
	
</body>
</html>