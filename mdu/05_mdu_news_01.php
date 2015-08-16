<!DOCTYPE html>
<html lang="en">
	<head>
		
		<title>05_mdu_news_01</title>
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

		<div class="wrapper shadowTop">
			<div class="innerWrapper paddedWrapper pushLeft oh sideBarEnabled">
				<div class="sideBar">
					<div class="sideSection linkList">
						<h4>Categories</h4>
						<ul>
							<li><a href="#" class="leftArrow">Lorem ipsum</a></li>
							<li><a href="#" class="leftArrow">Lorem ipsum</a></li>
							<li><a href="#" class="leftArrow">Lorem ipsum</a></li>
							<li class="last"><a href="#" class="leftArrow">Lorem ipsum</a></li>
						</ul>
					</div>
					<div class="sideSection">
						<h4>Search by date</h4>
						<form action="#" class="searchDate">
							<label for="month">Month</label>
							<select name="month" id="month">
								<option value="All">All months</option>
								<option value="Jan">January</option>
								<option value="Feb">February</option>
							</select>
							<label for="year">Year</label>
							<select name="year" id="year">
								<option value="All">All years</option>
								<option value="2012">2012</option>
								<option value="2011">2011</option>
							</select>
							<input type="submit" value="Go" class="ctaGreen">
							<div class="cf"></div>
						</form>
					</div>
					
					<div class="modular-box blue-box">
						<h4><span>Need urgent advice? Here is a longer title to test span</span></h4>
						<p>
							Lorem ipsum dolor sit amet consectetur adip iscing elit. Proin condimentum augue egetse sem cursus aliquam phasellus.
						</p>
						<a href="#" class="green">Find out more</a>
					</div>
					
					<div class="modular-box blue-box">
						<h4><span>Need urgent advice? Here is a longer title to test span</span></h4>
						<ul>
							<li class="file"><a href="#" class="leftArrow">Lorem ipsum <span>(PDF, 564kb)</span></a></li>
							<li class="file"><a href="#" class="leftArrow">Lorem ipsum <span>(PDF, 564kb)</span></a></li>
							<li class="file"><a href="#" class="leftArrow">Lorem ipsum <span>(PDF, 564kb)</span></a></li>
							<li class="last"><a href="#" class="leftArrow">Lorem ipsum</a></li>
						</ul>
					</div>
						
						
					<div class="sideSection socialButtons">
						<h4>Share this</h4>
						<ul>
							<li><a href="#"><img src="img/tw.png" height="18" width="22" alt=""></a></li>
							<li><a href="#"><img src="img/fb.png" height="21" width="20" alt=""></a></li>
							<li><a href="#"><img src="img/yt.png" height="21" width="22" alt=""></a></li>
							<li><a href="#"><img src="img/email.png" height="21" width="23" alt=""></a></li>
							<li><a href="#"><img src="img/connect.png" height="21" width="23" alt=""></a></li>
						</ul>
					</div>
				</div>

				<h2 class="red">MDU news</h2>
				<div class="titleOverlayWrapper">
					<img src="img/newsTop.jpg" height="265" width="470" alt="">
					<div class="colorColumn">
						<h3 class="red"><span>Main news article title</span></h3>
					</div>
				</div>
				<div class="section">
					<p>Omnis iste natus error sit <a href="#">voluptatem accusantium doloremque</a> laudantium, rem aperiam voluptatem.Omnis iste natus error sit voluptatem accusantium</p>
					<a href="#" class="leftArrow">Read more</a>
				</div>
				<div class="section">
					<h6>Lorem ipsum dolor</h6>
					<p class="date">15th October 2012</p>
					<p>Omnis iste natus error sit <a href="#">voluptatem accusantium doloremque</a> laudantium, rem aperiam voluptatem.Omnis iste natus error sit voluptatem accusantium</p>
					<a href="#" class="leftArrow">Read more</a>
				</div>
				<div class="section">
					<img src="img/newsCopy.jpg" height="88" width="156" alt="">
					<h6>Lorem ipsum dolor</h6>
					<p class="date">15th October 2012</p>
					<p>Omnis iste natus error sit <a href="#">voluptatem accusantium doloremque</a> laudantium, rem aperiam voluptatem.Omnis iste natus error sit voluptatem accusantium</p>
					<a href="#" class="leftArrow">Read more</a>
				</div>
				<div class="pagination">
					<div class="table">
						<ul>
							<li class="prev"><a href="#">Previous</a></li>
							<li><a href="#">1</a></li>
							<li class="current"><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li>...</li>
							<li><a href="#">15</a></li>
							<li><a href="#">16</a></li>
							<li class="last"><a href="#">17</a></li>
							<li class="next"><a href="#">Next</a></li>
						</ul>
					</div>
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
	</body>
</html>