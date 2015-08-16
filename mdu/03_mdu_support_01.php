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
							<h1 class="red"><span>Support</span></h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="wrapper">
			<div class="innerWrapper paddedWrapper pushLeft standardP copy-area">
				<h2 class="red">How we can help</h2>
				<div class="clear"></div>
				<div id="contact-support">
					<h2>Contact Us</h2>
					<p>24 Hour Medical Helpline</p>
					<p class="number">0800 716 646</p>
					<p>International line</p>
					<p class="number-international">+44 (0) 20 7022 2210</p>
					<a href="mailto:support@the-mdu.com">support@the-mdu.com</a>
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et enim at risus consequat viverra ac lacinia velit. Nunc lobortis auctor tellus, eget pellentesque nulla fringilla in. Nullam euismod pellentesque libero, eu pharetra orci tempus eget. Morbi in fringilla dui. Nullam nec nulla sit amet est facilisis</p>
				<h3>Courses</h3>
				<p>Morbi consectetur <a href="#">arcu sed ligula feugiat monestie</a>. Integer nec elit tortor, nec tristique libero. Proin eget mi id dui vehicula euismod.</p>
				<h3>Free seminars for members</h3>
				<p>Morbi consectetur <a href="#">arcu sed ligula feugiat monestie</a>. Integer nec elit tortor, nec tristique libero. Proin eget mi id dui vehicula euismod.</p>
				
				<div class="cf"></div>
			</div>
		</div>

		<div class="wrapper paleBlue shadowTop copy-area">
			<div class="innerWrapper paddedWrapper bottom pushLeft">
				<h3>What to do if</h3>
				<ul>
					<li><a href="#">Somebody has made a complaint against me</a></li>
					<li><a href="#">I have a GMC Hearing</a></li>
					<li><a href="#">I want to raise a concern</a></li>
					<li><a href="#">I am under investiagtion</a></li>
					<li><a href="#">Somebody is trying to sue me</a></li>
				</ul>
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