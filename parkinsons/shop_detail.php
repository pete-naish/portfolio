<!DOCTYPE html>
<html>
<head>
	<title>Shop Detail</title>
	
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
				<li>Shop detail</li>
			</ul>
			<div class="clear"></div>
		</div>
	</div>
	<div class="wrapper" id="mainContent">
		<div class="container_12 sideNavContainer">
			<h1 class="grid_3_w">Iron on letter t-shirt small</h1>
			<div class="clear"></div>	
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
			<div class="galleryWrap grid_2_w">
				<div class="galleryImages">
					<img src="img/content/ironTshirt.jpg" alt="i1" width="480" height="320">
					<img src="img/content/ironTshirt2.jpg" alt="i2" width="480" height="320">
					<img src="img/content/ironTshirt3.jpg" alt="i3" width="480" height="320">
				</div>
				<div class="galleryThumbs">
					<img class="active" src="img/content/ironTshirtThumb.jpg" alt="i1" width="40" height="40">
					<img src="img/content/ironTshirtThumb.jpg" alt="i2" width="40" height="40">
					<img src="img/content/ironTshirtThumb.jpg" alt="i3" width="40" height="40">
				</div>
				<div class="clear"></div>
			</div>
			
			<div class="box grid_1_w itemAction">
				<h3 class="cufon">Price &pound;3.25</h3>
				<p class="extraInfo"><strong>Delivery &pound;1 (UK only)</strong></p>
				<form action="#">
					<fieldset>
						<label for="selectSize" class="hide">Select size</label>
						<select name="selectSize" id="selectSize">
							<option value="">Select size</option>
							<option value="s">Small</option>
							<option value="m">Medium</option>
							<option value="l">Large</option>
						</select>
						<label for="selectColour" class="hide">Select colour</label>
						<select name="selectColour" id="selectColour">
							<option value="">Select colour</option>
							<option value="b">Blue</option>
							<option value="r">Red</option>
							<option value="g">Green</option>
						</select>
					</fieldset>
					<fieldset>
						<legend>Quantity</legend>
						<label for="itemQuantity" class="hide">Quantity</label>
						<input type="text" name="itemQuantity" id="itemQuantity" value="1">
						<input type="submit" value="Add to basket" class="cta">
					</fieldset>
				</form>
				<a href="#" class="wishlist">+ add to my wishlist</a>
				<ul class="sharer">
					<li>Share this</li>
					<li class="share"><a href="#">Share</a></li>
					<li class="pinterest"><a href="#">Pinterest</a></li>
					<li class="facebook"><a href="#">Facebook</a></li>
					<li class="twitter"><a href="#">Twitter</a></li>
					<li class="email"><a href="#">Email</a></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="wrapper">
		<div class="container_12 shadow">
			<div class="grid_3_w">
				<ul class="tabbedContentLinks">
					<li><a href="#description">Description</a></li>
					<li><a href="#delivery">Delivery and returns</a></li>
				</ul>
				<div id="description" class="tabbedContent">
					<p>Sed ut <a href="#">perspiciatis</a> unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
					<ul>
						<li>Test</li>
						<li><a href="#">Test</a></li>
						<li>Test</li>
					</ul>
					<ol>
						<li>Test</li>
						<li><a href="#">Test</a></li>
						<li>Test</li>
					</ol>
					<p><strong>Voluptatem sequi nesciunt:</strong><br/>Consequuntur magni.</p>
					<p><strong>Other information</strong><br/>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
					<div class="clear"></div>
				</div>
				<div id="delivery" class="tabbedContent">
					<p><strong>Important information</strong><br/>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="wrapper">
		<div class="container_12 shadow">
			<h2 class="grid_3_w">You might also like</h2>
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