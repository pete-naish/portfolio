<!DOCTYPE html>
<html>
<head>
	<title>Content</title>
	
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
				<li>Content</li>
			</ul>
			<div class="clear"></div>
		</div>
	</div>

	<div class="wrapper" id="mainContent">
		<div class="container_12 sideNavContainer">
			
			<div class="mainContent">
				<h1>Content title</h1>

				<p><strong>Lorem ipsum dolor sit amet consectetur adip iscing elit. Proin condimen tum augue egetse sem cursus aliquam phasellus etiam eros.</strong></p>
				<p>Lorem ipsum dolor sit amet consectetur adip iscing elit. <a href="#">Proin condimen tum augue</a> egetse sem cursus aliquam phasellus. Etiam ante eros vehicula vel commodo vitae semper ut arcu. Curabitur iaculis fermentum.</p>
				<ul>
					<li>Lorem ipsum dolor sit amet consectetur adip iscing elit.</li>
					<li><a href="#">Proin condimen tum augue egetse sem cursus aliquam phasellus.</a></li>
				</ul>

				<a href="http://www.youtube.com/embed/WiUB6sHH8xQ" class="video"><img src="img/content/womanVideo.jpg" height="292" width="520" alt="Anne Smith holding card that reads 'No one has to face Parkinson's alone'"></a>

				<h3>Aliquam phasellus etiam</h3>
				<p>Lorem ipsum dolor sit amet consectetur adip iscing elit. Proin condimen ad elitum augue egetse sem cursus aliquam phasellus. Etiam ante eros vehicula vel commo vitae semper ut arcu. Curabitur iaculis fermentum est a commodo libero.</p>
				<p>Lorem ipsum dolor sit amet consectetur adip iscing elit. Etiam ante eros vehicula commo vitae semper arcu.</p>
				<blockquote><p>Nulla euismod fringilla turpis a luctus tellus cursus in. Phaslus accumsan tempus mauris sit amet lorem hendrerit.</p><span class="citation">Jane Doe, Manchester</span></blockquote>
				<p>Proin condimen adipisc elitum augue egetse sem cursus aliqua phasellus. Etiam ante eros vehicula vel commo vitae semper ut arcu. Curabitur iaculis fermentum est a lorem commodo.</p>
				<p>Lorem ipsum dolor sit amet consectetur adip iscing elit. Proin condimen ad elitum augue egetse sem cursus aliquam phasellus. Etiam ante eros vehicula vel commo vitae semper ut arcu. Curabitur iaculis fermentum est a commodo libero.</p>
				<img src="img/content/handinglove.jpg" height="112" width="200" alt="Gloved hand performing science" class="floatLeft">
				<p>Lorem ipsum dolor sit amet consectetur adip iscing elit. Proin condimen ad elitum augue egetse sem cursus aliquam phasellus. Etiam ante eros vehicula vel commo vitae semper arcu. Curabitur iaculis fermentum est ad elits commodo libero.</p>
			</div>
			
			<div class="clear"></div>

			<div class="sideBar">
				<div class="box">
					<h4>You may also like</h4>
					<ul class="linkList">
						<li><a href="#">Sleep problems</a></li>
						<li><a href="#">Parkinson's fundraiser Alex Flynn on BBC's The One Show</a></li>
						<li><a href="#">Driving with Parkinson's</a></li>
					</ul>
				</div>
				<div class="box">
					<h4>Related downloads</h4>
					<ul class="linkList">
						<li class="pdf"><a href="#">Sleep problems<br/>(PDF, 55kb)</a></li>
					</ul>
				</div>
				<div class="box">
					<h4><a href="#">Standard CTA</a></h4>
					<a href="#"><img src="img/content/curls.jpg" height="90" width="160" alt="Two women in a lab"></a>
					<p>Sed ut perspiciatis unde omnis is natus unde omnis.</p>
				</div>
				<div class="box stackedContent">
					<h4>In the community</h4>
					<div class="postSnippet">
						<a href="#" class="avatar"><img src="img/content/jon123.jpg" height="42" width="42" alt="jon123"></a>
							<h3><a href="#">Travel sickness</a></h3>
							<p>Jon123 posted<br/>45 minutes ago</p>
					</div>
					<div class="postSnippet">
						<a href="#" class="avatar"><img src="img/content/joswife.jpg" height="42" width="42" alt="joswife"></a>
							<h3><a href="#">What type of Parkinson's?</a></h3>
							<p>Jon123 posted<br/>45 minutes ago</p>
					</div>
					<div class="postSnippet">
						<a href="#" class="avatar"><img src="img/content/martin48.jpg" height="42" width="42" alt="martin48"></a>
							<h3><a href="#">Newly diagnosed</a></h3>
							<p>Jon123 posted<br/>45 minutes ago</p>
					</div>
				</div>
			</div>
			
			<?php include('inc/sideNav.php'); ?>
		</div>
		<div class="wrapper waffle">
		<div class="container_12 shadow">
			<h3 class="grid_3_w sideNavSpacer">Next steps</h3>
			<ul class="linkList bold grid_3_w sideNavSpacer">
				<li><a href="#">Check font size</a></li>
				<li><a href="#">Neque porro quisquam est</a></li>
				<li><a href="#">Quis autem vel eum iure</a></li>
			</ul>
			<div class="clear"></div>
		</div>
	</div>
	</div>
	
	<div class="wrapper">
		<div class="container_12 shadow">
			<ul class="grid_3_w sideNavSpacer sharer">
				<li>Share this</li>
				<li class="share"><a href="#">Share</a></li>
				<li class="pinterest"><a href="#">Pinterest</a></li>
				<li class="facebook"><a href="#">Facebook</a></li>
				<li class="twitter"><a href="#">Twitter</a></li>
				<li class="linkedin"><a href="#">LinkedIn</a></li>
				<li class="gplus"><a href="#">Google Plus</a></li>
				<li class="email"><a href="#">Email</a></li>
			</ul>
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