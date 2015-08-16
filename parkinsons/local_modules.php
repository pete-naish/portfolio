<!DOCTYPE html>
<html>
<head>
	<title>Local Modules</title>
	
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
			<h1 class="grid_3_w sideNavSpacer">Local support near <span class="myPostcode">CF1 1ES</span></h1>
			<div class="clear"></div>
			<?php include('inc/sideNav.php'); ?>
		</div>
	</div>
	<div class="wrapper waffle">
		<div class="container_12 shadow">
			<div class="grid_2_w box featureBoxRight sideNavSpacer">
				<a href="#" class="floatRight"><img src="img/content/science.jpg" height="112" width="202" alt="Woman holding test tube"></a>
				<h3><a href="#">Help near you</a></h3>
				<p>We help thousands of people affected by Parkinson's across the UK and we can help you too. Just use the search below to find information and support workers, Parkinson's nurses and local groups/branches near you.</p>
			</div>
			<div class="grid_1_w box helpLine">
				<h3>
				Call our helpline
				<br>
				<span class="phoneNumber">0808 800 0303</span>
				</h3>
			</div>
			<div class="grid_1_w box postCodeSearch">
				<label for="postCodeEntry">Search a different location</label>
				<input id="postCodeEntry" class="wide" type="text" placeholder="Enter your postcode"/>
				<input type="submit" class="cta" value="Go"/>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="wrapper shadow">
		<div class="container_12">
			<h2 class="grid_3_w sideNavSpacer">People who can support you</h2>
			<div class="clear"></div>
			<div class="grid_1_2 box sideNavSpacer">
				<h3>Your local information and support worker</h3>
				<p><strong>Delyth Pritchard</strong><br>
					Cardiff and Vale,<br>
					Tel: 0844 225 3718 <br>
					Email: <a href="mailto:isw.cardiffvale@parkinsons.org.uk">isw.cardiffvale@parkinsons.org.uk</a>
				</p>
				<a href="#" class="ctaInline">See all information and support workers</a>
			</div>	
			<div class="grid_1_2 box">
				<h3>Parkinson's nurses near you</h3>
				<p><strong>Delyth Pritchard</strong><br>
					Cardiff and Vale,<br>
					Tel: 0844 225 3718 <br>
					Email: <a href="mailto:isw.cardiffvale@parkinsons.org.uk">isw.cardiffvale@parkinsons.org.uk</a>
				</p>
				<p>Maecenas pharetra neque vel purus molestie posuere. Maecenas iaculis, massa in fringilla cursus, nunc nunc elementum ligula, sit amet rutrum est ligula a diam.</p>
				<a href="#" class="ctaInline">See all information and support workers</a>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="wrapper shadow">
		<div class="container_12">
			<h2 class="grid_3_w sideNavSpacer">Your local groups near <span class="myPostcode">CF1 2XX</span></h2>
			<div class="clear"></div>
			<div class="grid_3_W box sideNavSpacer">
					<div class="groupMap">
						<iframe width="460" height="362" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=cardiff&amp;aq=&amp;sll=52.8382,-2.327815&amp;sspn=7.356199,21.643066&amp;ie=UTF8&amp;hq=&amp;hnear=Cardiff,+United+Kingdom&amp;ll=51.481581,-3.17909&amp;spn=0.118441,0.338173&amp;t=m&amp;z=12&amp;output=embed&amp;iwloc=near"></iframe>
					</div>
					<div class="grid_1_w">
						<ol class="mapLegend">
							<li>
								<div class="itemNumber cufon">1</div>
								<p class="itemDetails">
									<span class="itemName">Cardif Branch</span>
									<span class="itemLoc">Llanishen, Cardiff</span>
									2.6 miles from CF51ES
								</p>
							</li>
							<li>
								<div class="itemNumber cufon">2</div>
								<p class="itemDetails">
									<span class="itemName">Cardiff young onset support group</span>
									<span class="itemLoc">Rhiwbina</span>
									3.2 miles from CF51ES
								</p>
							</li>
							<li>
								<div class="itemNumber cufon">3</div>
								<p class="itemDetails">
									<span class="itemName">Pontypridd Support Group</span>
									<span class="itemLoc">Pontypridd</span>
									9.7 miles from CF51ES
								</p>
							</li>
							<li>
								<div class="itemNumber cufon">4</div>
								<p class="itemDetails">
									<span class="itemName">Another group</span>
									<span class="itemLoc">Location</span>
									10.6 miles from CF51ES
								</p>
							</li>
						</ol>
					<a href="#" class="ctaInline">See groups by region</a>
				</div>
			</div>	
			<div class="clear"></div>
		</div>
	</div>
	<div class="wrapper shadow">
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

	<?php
		include('inc/footer.php');
	?>

	<?php
		include('inc/scripts.php');
	?>

	
	
</body>
</html>