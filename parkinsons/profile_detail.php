<!DOCTYPE html>
<html>
<head>
	<title>Profile detail</title>
	
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
				<li>Profile detail</li>
			</ul>
			<div class="clear"></div>
		</div>
	</div>

	<div class="wrapper" id="mainContent">
		<div class="container_12 sideNavContainer">
			
			<div class="mainContent">
				<h1>Profile element stylings</h1>
				<h3>Personal messages</h3>
				<ul class="tabbedContentLinks">
					<li><a href="#messages">Messages</a></li>
					<li><a href="#write">Write a message</a></li>
					<li><a href="#drafts">Drafts</a></li>
					<li><a href="#blockedUsers">Blocked users</a></li>
				</ul>
				<div id="messages" class="tabbedContent">
					<form action="#">
						<input type="submit" value="Delete" class="cta">
						<label for="messageActions" class="hide">Message Actions</label>
						<select name="messageActions" id="messageActions">
							<option value="">Actions</option>
							<option value="read">Mark as read</option>
							<option value="move">Move</option>
						</select>
						<fieldset>
							<div class="msgCheck">
								<label for="msg1" class="hide">msg1</label>
								<input type="checkbox" name="msg1" id="msg1">
							</div>
							<div class="msgTitle">
								<a href="#">Meeting on wednesday</a>
								<p>Jo1970, bob98</p>
							</div>
							<div class="msgDetails">
								<p>16 August 2012</p>
								<p>at 2:52am</p>
							</div>
						</fieldset>
						<fieldset>
							<div class="msgCheck">
								<label for="msg2" class="hide">msg2</label>
								<input type="checkbox" name="msg2" id="msg2">
							</div>
							<div class="msgTitle">
								<a href="#">Meeting on wednesday</a>
								<p>Jo1970, bob98</p>
							</div>
							<div class="msgDetails">
								<p>16 August 2012</p>
								<p>at 2:52am</p>
							</div>
						</fieldset>
					</form>
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
					<div class="clear"></div>
				</div>
				<div id="write" class="tabbedContent">
					<p>Blank</p>
				</div>
				<div id="drafts" class="tabbedContent">
					<p>Blank</p>
				</div>
				<div id="blockedUsers" class="tabbedContent">
					<p>Blank</p>
				</div>
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
				<div class="clear"></div>
				<h3>My discussion posts</h3>
				<div class="box stackedContent">
					<div class="postSnippet intro">
						<p>You have posted 567 times<br/>
						Latest activity in discussions you have contributed to:</p>
					</div>
					<div class="postSnippet">
						<a href="#" class="avatar"><img src="img/content/martin48.jpg" height="42" width="42" alt="martin48"></a>
						<div>
							<p><a href="#">inquisitiveminder</a> replied to your post <a href="#">What type of Parkinson's?</a></p>
						</div>
					</div>
					<div class="postSnippet">
						<a href="#" class="avatar"><img src="img/content/martin48.jpg" height="42" width="42" alt="martin48"></a>
						<div>
							<p><a href="#">Jonny</a> replied to your post <a href="#">What type of Parkinson's?</a></p>
						</div>
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
				<h3>Your friends</h3>
				<div class="box stackedContent">
					<div class="postSnippet">
						<a href="#" class="avatar"><img src="img/content/martin48.jpg" height="42" width="42" alt="martin48"></a>
						<div>
							<a href="#" class="pm">Send private message</a>
							<h3><a href="#">martin48</a></h3>
							<p>Online</p>

						</div>
					</div>
					<div class="postSnippet">
						<a href="#" class="avatar"><img src="img/content/martin48.jpg" height="42" width="42" alt="martin48"></a>
						<div>
							<a href="#" class="pm">Send private message</a>
							<h3><a href="#">toby78</a></h3>
							<p>Online</p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="clear"></div>

			<div class="sideBar">
				<div class="box stackedContent">
					<h4>Who's online now?</h4>
					<div class="postSnippet">
						<a href="#" class="avatar"><img src="img/content/jon123.jpg" height="42" width="42" alt="jon123"></a>
						<h3><a href="#">jon123</a></h3>
					</div>
					<div class="postSnippet">
						<a href="#" class="avatar"><img src="img/content/joswife.jpg" height="42" width="42" alt="joswife"></a>
						<h3><a href="#">joswife</a></h3>
					</div>
					<div class="postSnippet">
						<a href="#" class="avatar"><img src="img/content/martin48.jpg" height="42" width="42" alt="martin48"></a>
						<h3><a href="#">martin48</a></h3>
					</div>
				</div>
				<div class="box">
					<h4>You receive news about:</h4>
					<ul>
						<li>Research</li>
						<li>Fundraising</li>
						<li>Campaigning</li>
						<li>News in your area</li>
					</ul>
					<p>You can change these preferences in <a href="#">settings</a>.</p>
				</div>
				<div class="box">
					<h4>Topics you may like</h4>
					<a href="#"><strong>Newly diagnosed</strong></a>
					<p class="extraInfo">tkl89 posted 35 minutes ago</p>
					<a href="#"><strong>Newly diagnosed</strong></a>
					<p class="extraInfo">tkl89 posted 35 minutes ago</p>
				</div>
				<div class="box stackedContent">
					<h4>Who's new?</h4>
					<div class="postSnippet">
						<a href="#" class="avatar"><img src="img/content/jon123.jpg" height="42" width="42" alt="jon123"></a>
						<h3><a href="#">jon123</a></h3>
					</div>
					<div class="postSnippet">
						<a href="#" class="avatar"><img src="img/content/joswife.jpg" height="42" width="42" alt="joswife"></a>
						<h3><a href="#">joswife</a></h3>
					</div>
					<div class="postSnippet">
						<a href="#" class="avatar"><img src="img/content/martin48.jpg" height="42" width="42" alt="martin48"></a>
						<h3><a href="#">martin48</a></h3>
					</div>
				</div>

			</div>
			
			<?php include('inc/sideNav.php'); ?>
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