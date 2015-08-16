<!DOCTYPE html>
<html lang="en">
	<head>
		
		<title>08_mdu_events_02</title>
		<?php
			include ("inc/head.php");
		?>
	</head>
	<body class="sideNavEnabled">
		<?php
			include ("inc/top.php");
		?>
		<div class="wrapper">
			<div class="innerWrapper">
				<ul class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="last"><a href="#">Choose MDU</a></li>
				</ul>

			</div>
		</div>
		<span class="sideNavWrapper">
			
		<?php
			include ("inc/sideNav.php");
		?>

		<div class="wrapper darkBlue">
			<div class="shadowTop">
				<div class="innerWrapper pushLeft eventsHeader paddedWrapper">
					<div class="slideContent">
						<div class="colorColumn">
							<h1 class="red"><span>Events</span></h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="wrapper">
			<div class="innerWrapper paddedWrapper pushLeft standardP">
				<h2 class="red">MDU training</h2>
				<div class="clear"></div>
				<blockquote class="right">Lorem ipsum dolor sit amet consectetur adip iscing elit. Proin condimen tum augue egetse sem cursus aliquam phasellus.</blockquote>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et enim at risus consequat viverra ac lacinia velit. Nunc lobortis auctor tellus, eget pellentesque nulla fringilla in. Nullam euismod pellentesque libero, eu pharetra orci tempus eget. Morbi in fringilla dui. Nullam nec nulla sit amet est facilisis</p>
				<h3>Courses</h3>
				<p>Morbi consectetur <a href="#">arcu sed ligula feugiat monestie</a>. Integer nec elit tortor, nec tristique libero. Proin eget mi id dui vehicula euismod.</p>
				<h3>Free seminars for members</h3>
				<p>Morbi consectetur <a href="#">arcu sed ligula feugiat monestie</a>. Integer nec elit tortor, nec tristique libero. Proin eget mi id dui vehicula euismod.</p>
				<div class="cf"></div>
			</div>
		</div>

		<div class="wrapper paleBlue shadowTop">
			<div class="innerWrapper paddedWrapper bottom pushLeft">
				<ul class="tabs">
					<li><a href="#courses">Courses</a></li>
					<li><a href="#seminars">Free seminars</a></li>
				</ul>
				<div id="courses">
					<div class="course">
						<div class="left">
							<h3><a href="#">Effective Patient Communication Skills for Doctors workshop: Manchester</a></h3>
							<ul class="details">
								<li>Monday, November 3 2012</li>
								<li class="last">St. Giles Hospital, Manchester</li>
							</ul>
							<p class="credits">6 CDP credits</p>
							<p class="description">Lorem ipsum dolor amet conse adip iscing elit incidunt ut labore vestibulum omnis elit. Socili lorem ipsum lorem ipsum dolor amet conse adipiscing elit incidunt ut labore. Lorem ipsum dolor amet conse adip iscing elit incidunt ut labore vestibulum omnis elit. Socili lorem ipsum lorem ipsum dolor amet conse adipiscing elit incidunt ut labore.</p>
						</div>
						<div class="right">
							<a href="#" class="ctaGreen">Book now</a>
							<p class="cost">Non Members: <strong>&pound;195</strong></p>
							<p class="cost">Members: <strong>&pound;150</strong></p>
						</div>
						<div class="cf"></div>
					</div>
					<div class="course last">
						<div class="left">
							<h3><a href="#">Effective Patient Communication Skills for Doctors workshop: Manchester</a></h3>
							<ul class="details">
								<li>Monday, November 3 2012</li>
								<li class="last">St. Giles Hospital, Manchester</li>
							</ul>
							<p class="credits">6 CDP credits</p>
							<p class="description">Lorem ipsum dolor amet conse adip iscing elit incidunt ut labore vestibulum omnis elit. Socili lorem ipsum lorem ipsum dolor amet conse adipiscing elit incidunt ut labore. Lorem ipsum dolor amet conse adip iscing elit incidunt ut labore vestibulum omnis elit. Socili lorem ipsum lorem ipsum dolor amet conse adipiscing elit incidunt ut labore.</p>
						</div>
						<div class="right">
							<a href="#" class="ctaGreen">Book now</a>
							<p class="cost">Non Members: <strong>&pound;195</strong></p>
							<p class="cost">Members: <strong>&pound;150</strong></p>
						</div>
						<div class="cf"></div>
					</div>
					<div class="cf"></div>
				</div>
				<div class="cf"></div>
				<div id="seminars">
					<form action="#">
					<div class="course">
						<div class="left">
							<h3><a href="#">End of life carer</a></h3>
							<ul class="details">
								<li>Monday, November 3 2012</li>
								<li class="last">St. Giles Hospital, Manchester</li>
								<li class="time">45 Minutes</li>
							</ul>
							<p class="description">Lorem ipsum dolor amet conse adip iscing elit incidunt ut labore vestibulum omnis elit. Socili lorem ipsum lorem ipsum dolor amet conse adipiscing elit incidunt ut labore. Lorem ipsum dolor amet conse adip iscing elit incidunt ut labore vestibulum omnis elit. Socili lorem ipsum lorem ipsum dolor amet conse adipiscing elit incidunt ut labore.</p>
						</div>
						<div class="right">
							<input type="checkbox" name="interested" id="interested1">
							<label for="interested1">I'm interested in this workshop</label>
						</div>
						<div class="cf"></div>
					</div>
					<div class="seminarForm">
						<h3>Enter your details</h3>
						<!-- <p class="error">Please fill in the highlighted fields</p> -->
						<div>
							<label for="fullName">Name*</label>
							<input type="text" name="fullName" id="fullName">
						</div>
						<div>
							<label for="emailAddress">Email*</label>
							<input type="email" name="emailAddress" id="emailAddress">
						</div>
						<div>
							<label for="postcode">Post code*</label>
							<input type="text" name="postcode" id="postcode" class="short">
							<a href="#" class="ctaGreen">Look up address</a> or <a href="#">enter your address manually</a>
						</div>
						<div>
							<label for="membershipNumber">Membership number text wrap example*</label>
							<input type="text" name="membershipNumber" id="membershipNumber">
						</div>
						<div>
							<label for="phoneNumber">Phone number*</label>
							<input type="text" name="phoneNumber" id="phoneNumber">
						</div>
						<div>
							<label for="groupCare">GROUPCARE number*</label>
							<input type="text" name="groupCare" id="groupCare">
						</div>
						<input type="submit" value="Submit" class="ctaGreen">
					</div>
					</form>
					<div class="cf"></div>
				</div>
				<div class="cf"></div>
			</div>
		</div>

		</span>
		<?php
			include ("inc/twitter.php");
		?>
		<?php
			include ("inc/footer.php");
		?>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
		 <script type="text/javascript" src="js/carouFredSel.js"></script>
		 <script type="text/javascript" src="js/jtweets.js"></script>
		<script type="text/javascript" src="js/custom.js"></script>
		<script type="text/javascript">
		$('ul.tabs').each(function(){
		    // For each set of tabs, we want to keep track of
		    // which tab is active and it's associated content
		    var $active, $content, $links = $(this).find('a');

		    // If the location.hash matches one of the links, use that as the active tab.
		    // If no match is found, use the first link as the initial active tab.
		    $active = $($links.filter('[href="'+location.hash+'"]')[0] || $links[0]);
		    $active.addClass('active');
		    $content = $($active.attr('href'));

		    // Hide the remaining content
		    $links.not($active).each(function () {
		        $($(this).attr('href')).hide();
		    });

		    // Bind the click event handler
		    $(this).on('click', 'a', function(e){
		        // Make the old tab inactive.
		        $active.removeClass('active');
		        $content.hide();

		        // Update the variables with the new link and content
		        $active = $(this);
		        $content = $($(this).attr('href'));

		        // Make the tab active.
		        $active.addClass('active');
		        $content.show();

		        // Prevent the anchor's default click action
		        e.preventDefault();
		    });
		});
</script>	
		</body>
</html>