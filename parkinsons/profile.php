<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	
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
				<li>Profile</li>
			</ul>
			<div class="clear"></div>
		</div>
	</div>
	<div class="wrapper" id="mainContent">
		<div class="container_12 sideNavContainer">
			<h1 class="grid_3_w sideNavSpacer">Your account</h1>
			<div class="clear"></div>
			<?php include('inc/sideNav.php'); ?>
		</div>
	</div>
	
	<div class="wrapper waffle">
		<div class="container_12 shadow">
			<div class="grid_2_w box sideNavSpacer featureBox userProfile">
				<div>
					<img src="img/content/science.jpg" height="113" width="201" alt="">
					<a href="#">View public profile</a>
					<a href="#">Account settings</a>
				</div>
				<h6>Display name:</h6>
				<p>Kate82</p>
				<h6>Member since:</h6>
				<p>03/08/2012</p>
				<h6>About you:</h6>
				<p>I like baking and going to gigs. Lorem ipsum dolor sit amet. Conseteur amet datti ipsum lor avec sit confitt.</p>
				<h6>Your location (not public):</h6>
				<p>CF5 1ES</p>
			</div>
			<div class="grid_1_w box">
				<h3>Your notifications</h3>
				<ul class="linkList">
					<li class="msg"><a href="#">1 new message</a></li>
					<li class="upd"><a href="#">2 updates in the research group</a></li>
					<li class="pst"><a href="#">14 new posts in your discussions</a></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="wrapper">
		<div class="container_12 shadow">
			<h2 class="grid_3_w sideNavSpacer">In the community</h2>
			<div class="clear"></div>
			<div class="grid_1_w sideNavSpacer box postSnippet">
				<a href="#" class="avatar">
					<img src="img/content/martin48.jpg" alt="martin48">
				</a>
					<h3><a href="#">Travel Sickness</a></h3>
					<p>joswife posted<br/>1 day ago</p>
			</div>
			<div class="grid_1_w box postSnippet">
				<a href="#" class="avatar">
					<img src="img/content/joswife.jpg" alt="joswife">
				</a>
					<h3><a href="#">What type of Parkinson's?</a></h3>
					<p>Martin48 posted<br/>3 days ago</p>
			</div>
			<div class="grid_1_w box postSnippet">
				<a href="#" class="avatar">
					<img src="img/content/jon123.jpg" alt="jon123">
				</a>
					<h3><a href="#">Newly Diagnosed</a></h3>
					<p>Jon123 posted<br/>45 minutes ago</p>
			</div>
			<div class="clear"></div>
			<div class="grid_3_w sideNavSpacer">
				<a href="#" class="cta floatRight">See all my discussions</a>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="wrapper">
		<div class="container_12 shadow">
			<h2 class="grid_3_w sideNavSpacer">News for you</h2>
			<div class="clear"></div>
			<div class="grid_1_w sideNavSpacer box">
				<h3><a href="#">Dr Kieran Breen reports on highlights from our 2-day research conference</a></h3>
				<p><strong>09 November 2012</strong></p>
			</div>
			<div class="grid_1_w box">
				<h3><a href="#">Dr Kieran Breen reports on highlights from our 2-day research conference</a></h3>
				<p><strong>09 November 2012</strong></p>
			</div>
			<div class="grid_1_w box">
				<h3><a href="#">Dr Kieran Breen reports on highlights from our 2-day research conference</a></h3>
				<p><strong>09 November 2012</strong></p>
			</div>
			<div class="clear"></div>
			<div class="grid_3_w sideNavSpacer">
				<a href="#" class="cta floatRight">See all my news</a>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="wrapper">
		<div class="container_12 shadow">
			<h2 class="grid_3_w sideNavSpacer">Events near <span class="myPostcode">CF5 1ES</span></h2>
			<div class="clear"></div>
			<div class="grid_1_w box sideNavSpacer">
				<h3><a href="#">Skydive in Nottingham</a></h3>
				<p class="extraInfo"><strong>Nottingham</strong></p>
				<p class="extraInfo">27 December 2012</p>
				<a href="#"><img src="img/content/cameron.jpg" height="112" width="202" alt="David Cameron playing with a buzz wire game"></a>
			</div>
			<div class="grid_1_w box">
				<h3><a href="#">Spooky Sprint</a></h3>
				<p class="extraInfo"><strong>London</strong></p>
				<p class="extraInfo">03 January 2013</p>
				<img src="img/content/clues.jpg" height="112" width="202" alt="Woman using a microscope">
			</div>
			<div class="grid_1_w box">
				<h3><a href="#">Just Walk</a></h3>
				<p class="extraInfo"><strong>London</strong></p>
				<p class="extraInfo">27 December 2012</p>
				<img src="img/content/flu.jpg" height="112" width="202" alt="Man looking off into distance at seaside">
			</div>
			<div class="clear"></div>
			<div class="grid_3_w sideNavSpacer">
				<a href="#" class="cta floatRight">See all my events</a>
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