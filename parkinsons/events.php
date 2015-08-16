<!DOCTYPE html>
<html>
<head>
	<title>Events</title>
	
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
				<li>Events</li>
			</ul>
			<div class="clear"></div>
		</div>
	</div>

	<div class="wrapper" id="mainContent">
		<div class="container_12 sideNavContainer">
			<h1 class="grid_3_w sideNavSpacer">Events</h1>
			<div class="clear"></div>
			<?php include('inc/sideNav.php'); ?>
		</div>
	</div>
	<div class="wrapper waffle">
		<div class="container_12 shadow">
			<h2 class="grid_3_w sideNavSpacer">Up and coming events</h2>
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
				<a href="#" class="cta floatRight">See all events</a>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="wrapper shadow">
		<div class="container_12 sideNavContainer">

			<div class="mainContent">
				<h3>Events &amp; news listings</h3>
				<div class="listing">
					<a href="#"><img src="img/content/handinglove.jpg" height="112" width="200" alt="Gloved hand performing science" class="floatLeft"></a>
					<h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
					<p class="listingInfo"><strong>Cardiff</strong> | 25 October 2012</p>
					<p>Proin condimen ad elitum augue egetse sem cursus aliquam phasellus. Etiam ante eros vehicula vel commo vitae semper arcu commodo libero.</p>
				</div>
				<div class="listing">
					<h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
					<p class="listingInfo"><strong>Cardiff</strong> | 25 October 2012</p>
					<p>Proin condimen ad elitum augue egetse sem cursus aliquam phasellus. Etiam ante eros vehicula vel commo vitae semper arcu commodo libero.</p>
				</div>
				<div class="listing">
					<a href="#"><img src="img/content/handinglove.jpg" height="112" width="200" alt="Gloved hand performing science" class="floatLeft"></a>
					<h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
					<p class="listingInfo"><strong>Cardiff</strong> | 25 October 2012</p>
					<p>Proin condimen ad elitum augue egetse sem cursus aliquam phasellus. Etiam ante eros vehicula vel commo vitae semper arcu commodo libero.</p>
				</div>
				<ul class="pagination">
					<li><a href="#" class="prev">Prev</a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">17</a></li>
						<li><a href="#">18</a></li>
						<li class="last"><a href="#">19</a></li>
					<li><a href="#" class="next">Next</a></li>					
				</ul>
			</div>
				
			<div class="sideBar">
				<div class="box searchBox">
					<form action="#">
						<fieldset>
							<legend>Search events</legend>
							<label for="eventKeyword" class="hide">Enter event keyword</label>
							<input type="text" name="eventKeyword" id="eventKeyword" placeholder="e.g. marathon">
							<input type="submit" value="Go" class="cta">
						</fieldset>
						<fieldset>
							<legend>Filter your results</legend>
							<h4>Categories</h4>
							<input type="radio" name="category" id="fundraising" value="fundraising">
							<label for="fundraising">Fundraising</label>
							<input type="radio" name="category" id="supportEvents" value="supportEvents">
							<label for="supportEvents">Support Events</label>
							<input type="radio" name="category" id="conferences" value="conferences">
							<label for="conferences">Conferences</label>
						</fieldset>
						<fieldset>
							<legend class="selectLabel">Country or region</legend>
							<div class="selectGroup">
								<label for="countrySel" class="hide">Select country or region</label>
								<select name="country" id="countrySel"> 
									<option value="" selected="selected">All locations</option> 
									<option value="United Kingdom">United Kingdom</option> 
									<option value="United States">United States</option>
								</select>
							</div>
						</fieldset>
						<fieldset>
							<legend class="selectLabel">Date</legend>
							<label class="dateLabel" for="dateFrom">From</label>
							<input type="text" id="dateFrom" class="datePicker" placeholder="dd/mm/yyyy"/>
							<label class="dateLabel" for="dateTo">To</label>
							<input type="text" id="dateTo" class="datePicker" placeholder="dd/mm/yyyy"/>
						</fieldset>
					</form>
				</div>
				<div class="box">
					<h4><a href="#">@ParkinsonsUK</a></h4>
					<ul class="feed">
						<li class="item">
							<div class="message">
								<p><a href="#">@abigailvjx</a> Well done Abigail - your support is very much appreciated. Nice running vest too!</p>
							</div>
							<div class="messageDetails">2:04 AM - 19 Nov 12</div>
						</li>

						<li class="item">
							<div class="message">
								<p><a href="#">@abigailvjx</a> Well done Abigail - your support is very much appreciated. Nice running vest too!</p>
							</div>
							<div class="messageDetails">2:04 AM - 19 Nov 12</div>
						</li>
					</ul>
					<a href="#" class="twitter">Follow on Twitter</a>
				</div>
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