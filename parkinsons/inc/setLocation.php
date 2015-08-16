<!DOCTYPE html>
<html>
<head>
<title>Set your location</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="../css/main.css" media="all" />
<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="../css/ie7.css" />
<![endif]-->
</head>
<body class="setLocationPage">
<h2>Where are you?</h2>
<p>Nulla scelerisque vulputate lorem in tristique odio tempor a cras augue lorem ipsum dolor.</p>
<form action="#">
	<label for="postcode" class="hide">Enter your postcode</label>
	<input type="text" name="postcode" id="postcode" placeholder="Enter your postcode">
	<input type="submit" value="Set location" class="cta">
</form>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="../js/cufon.js"></script>
<script src="../js/parkinsons.font.js"></script>

<script>
	$(function() {

		Cufon.replace('h2, .labelLinks a, .tabNavigation a, .localSupport label, .iconBigText a', {
			hover: true
		});

		Cufon.now();

	});

</script>

</body>
</html>