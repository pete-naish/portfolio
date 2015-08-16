<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<title>David Lloyd Standard Content Page</title>
		<meta name="description" content="">
		<meta name="keywords" content="">

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width">

		<link rel="stylesheet" href="assets/css/screen.css" media="all">
		<!--[if lt IE 9]>
		<link rel="stylesheet" href="assets/css/ie.css" media="all">
		<![endif]-->
		<!-- <link rel="stylesheet" href="assets/css/print.css" media="print"> -->
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

	</head>
	<body>
		<?php include("inc/header.php"); ?>
		<section class="page-top">
			<div class="container">
				<div class="container-grid">
					<div class="grid-8">
						<ul class="breadcrumb">
							<li><a href="#">clubs</a></li>
							<li><a href="#">last page</a></li>
							<li>current page</li>
						</ul>
					</div>
					<div class="grid-8">
						<h1>Heading 1</h1>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container">
				<div class="container-grid standard-content">
					<div class="grid-6">
						<h2>Heading 2</h2>
						<p>At David Lloyd Hatfield, we're proud to offer you some of the finest gym and sports facilities. With outdoor and indoor pools and access to world class tennis facilities lorem ipsum.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, quae, qui, aspernatur adipisci optio minus unde ipsam deserunt at commodi sit libero sint voluptate deleniti pariatur fugit ipsa eveniet doloremque perspiciatis nulla. Qui, explicabo, similique sequi dicta labore nobis quaerat.</p>
						<img src="assets/img/content/pool.jpg" alt="Swimming pool" class="float-left">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit in ipsa expedita laborum cumque soluta amet praesentium suscipit. Eveniet, sit placeat cupiditate id molestiae culpa vitae animi esse optio saepe praesentium corporis nam ducimus aliquid libero perferendis doloribus consequuntur non.</p>
						<div class="separator"></div>
						<h3>Full width <span>video or image</span></h3>
						<img src="assets/img/content/lunge.jpg" alt="Lunging people">
						<div class="separator"></div>
						<h3>Heading 3 <span>with detail text</span></h3>
						<ul>
							<li>Basketball court</li>
							<li>Gym</li>
							<li>Hair and beauty salon</li>
							<li>Hotel bedrooms</li>
							<li>Indoor pool</li>
						</ul>
						<ol>
							<li>Basketball court</li>
							<li>Gym</li>
							<li>Hair and beauty salon</li>
							<li>Hotel bedrooms</li>
							<li>Indoor pool</li>
						</ol>
						<div class="separator"></div>
						<h3>Form field <span>styles</span></h3>
						<form action="#">
							<p class="error">Error message</p>
							<div class="field-wrapper">
								<label for="text-entry">Text entry</label>
								<input type="text" name="text-entry" id="text-entry" placeholder="Enter text">
								<a href="#" class="icon-help" title="This is the help text tooltip"></a>
							</div>
							<div class="field-wrapper error">
								<label for="text-entry-2">Text entry 2</label>
								<p class="error">This is an error message</p>
								<input type="text" name="text-entry-2" id="text-entry-2" placeholder="Enter text">
								<!-- <a href="#" class="icon-error" title="This is the error text tooltip This is the error text tooltip This is the error text tooltip"></a> -->
							</div>
							<div class="field-wrapper">
								<label for="dropdown">Dropdown</label>
								<select name="dropdown" id="dropdown">
									<option value="">Select one</option>
									<option value="first">First option</option>
								</select>
							</div>
							<div class="field-wrapper">
								<fieldset>
									<legend>Date entry</legend>
									<label for="date-entry-1" class="hidden-visually">Date entry 1</label>
									<input type="text" name="date-entry-1" id="date-entry-1" placeholder="DD" maxlength="2" size="2">
									<label for="date-entry-2" class="hidden-visually">Date entry 2</label>
									<input type="text" name="date-entry-2" id="date-entry-2" placeholder="MM" maxlength="2" size="2">
									<label for="date-entry-3" class="hidden-visually">Date entry 3</label>
									<input type="text" name="date-entry-3" id="date-entry-3" placeholder="YY" maxlength="2" size="2">
								</fieldset>
							</div>
							<div class="field-wrapper">
								<fieldset>
									<legend>Check boxes</legend>
									<div class="fieldset-wrapper">
										<input type="checkbox" name="check-box-1" id="check-box-1">
										<label for="check-box-1">Check box 1 label</label>
										<input type="checkbox" name="check-box-2" id="check-box-2">
										<label for="check-box-2">Check box 2 label</label>
									</div>
								</fieldset>
							</div>
							<div class="field-wrapper">
								<fieldset>
									<legend>Radio buttons</legend>
									<div class="fieldset-wrapper">
										<input type="radio" value="radio-button-1" name="radio-button" id="radio-button-1">
										<label for="radio-button-1">Radio button 1 label</label>
										<input type="radio" name="radio-button" id="radio-button-2">
										<label for="radio-button-2">Radio button 2 label</label>
									</div>
								</fieldset>
							</div>
							<div class="field-wrapper">
								<label for="text-area">Text area</label>
								<textarea name="text-area" id="textarea" placeholder="Enter text"></textarea>
							</div>
							<div class="field-wrapper">
								<input type="submit" value="Submit">
							</div>
						</form>
						<div class="separator"></div>
						<h3>Table <span>style</span></h3>
						<table class=" rt">
							<thead class="">
								<tr>
									<th>Column 1</th>
									<th>Column 2</th>
									<th>Column 3</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Lorem ipsum dolor sit amet</td>
									<td>Lorem ipsum dolor sit amet, consectetur</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, at</td>
								</tr>
								<tr>
									<td>Lorem ipsum</td>
									<td>Lorem ipsum dolor sit amet, consectetur</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, at</td>
								</tr>
								<tr>
									<td>Lorem ipsum</td>
									<td>Lorem ipsum dolor sit amet, consectetur</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, at</td>
								</tr>
							</tbody>
						</table>
						<div class="separator"></div>
						<h3>Quote <span>style</span></h3>
						<blockquote>
							<p>“QUOTATION style DIN 28PX BOLD 333333 LOREM IPSUM DOLOR SIT.”</p>
							<cite><a href="#" title="Quotee name">Quotee name</a></cite>
						</blockquote>
						<div class="separator"></div>
					</div>
					<div class="grid-2 sidebar">
						<div class="block promo-text">
							<h4>Maximise your membership</h4>
							<img src="assets/img/content/crunch.jpg" alt="Lady crunches">
							<div class="no-wrap">
								<h5>Lose and shape up</h5>
								<a href="#" class="cta-inline">Book your place<i></i></a>
								<p>Set your fitness goals</p>
							</div>
						</div>
						<div class="block">
							<h4>Promotion</h4>
							<img src="assets/img/content/classwar.jpg" alt="Class war - 10,000 classes a week">
							<a href="#" class="cta">Get me started</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="actionbar multi-action cta-membership-or-club-finder">
			<div class="container">
				<div class="container-grid">
					<div class="grid-4">
						<h4>Become a member</h4>
						<a href="#" class="cta-inline">View all our membership options<i></i></a>
						<p>or find out what options are available at your local club</p>
					</div>
					<div class="grid-4">
						<h4>Search for a club</h4>
						<form action="#">
							<div class="stretch-wrap">
								<label for="postcode" class="hidden-visually">Postcode</label>
								<input type="text" name="postcode" id="postcode" maxlength="8" placeholder="Enter town or postcode">
								<input type="submit" class="cta" value="Go">
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<?php include("inc/footer.php"); ?>

		<!-- // <script src="assets/js/main.min.js"></script> -->
		<script src="assets/js/main.js"></script>

	</body>
</html>