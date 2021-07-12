<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Website to honor band Linkin Park">
	<meta name="keywords" content="Honor, Linkin Park, Chester Bennington">
	<meta name="author" content="Nataly S. Mota">
	<title><?php echo $titulo ?></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/wow.min.js"></script>
	<script type="text/javascript">
		new WOW().init();
	</script>
</head>
<body>
	<header id="header">
		<button class="btnMenu" onclick="openNav()">
			<img src="images/menu.png" alt="">
		</button>

		<div class="contentMenu" id="contentMenu">
			<figure class="logoMenu">
				<button class="btnCloseMenu" onclick="closeNav()">&times;</button>

				<a href="index">
					<img src="images/lp-logo.png" alt="">
				</a>
			</figure>

			<nav class="menu">
				<a href="index">Home Page</a>
				<a href="biography">Biography</a>
				<a href="photos">Photos</a>
				<a href="discography">Discography</a>
				<a href="videos">Videos</a>
			</nav>

			<div class="networkMenu">
				<figure>
					<a href="https://www.facebook.com/linkinpark" title="Facebook" target="_blank">
						<img src="images/facebook.png" alt="">
					</a>
					<a href="https://www.instagram.com/linkinpark" title="Instagram" target="_blank">
						<img src="images/instagram.png" alt="">
					</a>
					<a href="https://twitter.com/linkinpark" title="Twitter" target="_blank">
						<img src="images/twitter.png" alt="">
					</a>
					<a href="https://www.youtube.com/channel/UCZU9T1ceaOgwfLRq7OKFU4Q" title="Youtube" target="_blank">
						<img src="images/youtube.png" alt="">
					</a>
				</figure>
			</div>
		</div>

		<div class="networkTop">
			<figure>
				<a href="https://www.facebook.com/linkinpark" title="Facebook" target="_blank" target="_blank">
					<img src="images/facebook.png" alt="">
				</a>
				<a href="https://www.instagram.com/linkinpark" title="Instagram" target="_blank">
					<img src="images/instagram.png" alt="">
				</a>
				<a href="https://twitter.com/linkinpark" title="Twitter" target="_blank">
					<img src="images/twitter.png" alt="">
				</a>
				<a href="https://www.youtube.com/channel/UCZU9T1ceaOgwfLRq7OKFU4Q" title="Youtube" target="_blank">
					<img src="images/youtube.png" alt="">
				</a>
			</figure>
		</div>
	</header>