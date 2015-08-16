<!DOCTYPE html>
<html>
<head>
	<title>Publications Search</title>
	
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
			<h1 class="grid_3_w sideNavSpacer">Our Publications</h1>
			<p class="sideNavSpacer grid_2_w subHeader">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,  totam rem aperiam voluptatem.</p>
			<div class="clear"></div>
			<?php include('inc/sideNav.php'); ?>
		</div>
	</div>
	<div class="wrapper waffle">
		<div class="container_12 shadow">
			<div class="grid_3_w box searchPublications sideNavSpacer">
				<div class="grid_1_w">
					<label for="searchKeywords">Search for:</label>
					<input type="text" placeholder="Keywords" id="searchKeywords">
				</div>
				<div class="grid_1_w">
					<label for="searchTopics">Topic:</label>
					<select name="searchTopics" id="searchTopics">
						<option value="allTopics">All topics</option>
						<option value="motorSymptoms">Motor and non-motor symptoms</option>
						<option value="everyDay">Every day living</option>
					</select>
				</div>
				<div class="grid_1_w">
					<input type="submit" value="Search" class="cta">
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="wrapper shadow">
		<div class="container_12">
			<h2 class="grid_1_w sideNavSpacer floatLeft">Results</h2>
			<div class="floatRight orderResults">
				<label class="searchOrderLabel" for="searchOrder">Order by:</label>
				<select id="searchOrder">
					<option value="relevance">Relevance</option>
					<option value="pubDateHighToLow">Date Published (High to Low)</option>
					<option value="pubDateLowToHigh">Date Published (Low to High)</option>
				</select>
			</div>
			<div class="clear"></div>
			<div class="grid_3_w box sideNavSpacer searchResult">
				<a href="#" class="floatLeft">
					<img src="img/content/progress.png" alt="">
				</a>
				<div class="grid_2_w">
					<h3><a href="#">Blinder a Parkinson's (Fatigue and Parkinson's)</a></h3>
					<p>Voluptatem accusantium doloremque laudantium,  totam rem aperiam voluptatem.</p>
					
				</div>
				<p class="pubTopics"><strong>Topics: </strong><a href="#">Motor and non-motor symptoms</a>, <a href="#">Everyday living</a></p>
			</div>
			<div class="grid_3_w box sideNavSpacer searchResult">
				<a href="#" class="floatLeft">
					<img src="img/content/progress.png" alt="">
				</a>
				<div class="grid_2_w">
					<h3><a href="">About our research</a></h3>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,  totam rem aperiam voluptatem.</p>
					
				</div>
				<p class="pubTopics"><strong>Topics: </strong><a href="#">About Parkinson's</a>, <a href="#">Research</a></p>
			</div>
			<div class="grid_3_w box sideNavSpacer searchResult">
				<a href="#" class="floatLeft">
					<img src="img/content/progress.png" alt="">
				</a>
				<div class="grid_2_w">
					<h3><a href="">Parkinson's Bwyta, llyncu a rheoli poer yn Parkinson's (Eating, swallowing and saliva control in Parkinson's)</a></h3>
					<p>natus error sit voluptatem accusantium doloremque laudantium,  totam rem aperiam voluptatem.</p>
					
				</div>
				<p class="pubTopics"><strong>Topics: </strong><a href="#">Motor and non-motor symptoms</a>, <a href="#">Everyday living</a></p>
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