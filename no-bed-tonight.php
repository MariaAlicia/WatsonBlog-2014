<!doctype html>
<html lang="en" dir="ltr">
	<head> 	<!-- meta data -->
		<meta charset="UTF-8">
		<title>Wats-on in my life</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="This website is the personal blog of the cat named Watson" />
		<meta name="author" content="Maria Ahkit" />
		<meta name="copyright" content="Copyright 2014 Maria Ahkit" />
		<meta name="robots" content= "noindex, nofollow" />
		<meta name="keywords" content="blog Watson cat bed refusal">
		<link rel="stylesheet" href="css/default.css" type="text/css" media="all" />
		<link rel="stylesheet" type="text/css" href="css/print.css" media="print" /> 
		<script type="text/javascript" src="date_time.js"></script>
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5-els.js"></script>
		<![endif]-->
	</head>
	
	<body>
		<!-- begin container to centre layout in middle of page -->
		<div id="container">
			<!-- This holds everything -->
			<iframe class="noprint" border="0" allowtransparency="true" src="http://platform.tumblr.com/v1/follow_button.html?button_type=2&tumblelog=watsoninmylife&color_scheme=dark" scrolling="no" width="113" frameborder="0" height="25"></iframe>
		
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
				fjs.parentNode.insertBefore(js, fjs);
				}
				(document, 'script', 'facebook-jssdk'));
			</script>
			
			<header>
				<img src="assets/header.gif" class="printonly" alt="Wats-on in my life">
				<h1>Wats-on in my life</h1>
			</header>
			
			<!-- navigation -->
			<nav class="noprint">
				<a href="index.php"><button>Home Page</button></a>
				<div class="fb-like" data-href="https://www.facebook.com/watsoninmylife" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
			</nav> <!-- end navigation -->
			
			<!-- begin main column -->
			<div id="article2" class="printonly">
				<?php
					$dir_name = "images";
					echo '<div class="blog-image"><figure><img src="'.$dir_name.'/'.'no-bed-tonight.jpg" alt="Watson blatantly refusing to sleep in his bed by sleeping next to it instead."/></figure></div>';
				?>
			</div> <!-- end main column -->
				
			<div id="article2" class="printonly">
				<h1>No bed tonight</h1>
				<p>
					Eh, what can I say? I just didn't feel like sleeping in my own bed tonight. If I was being completely honest, I would have said that I just didn't think I could muster up the energy required for that extra 40cm of distance. 
				</p>
			</div>
			
			<!-- begin footer -->
			<footer>
				<p class="printonly">Copyright &copy; Wats-on in my life 2014<br>
					<span id="date_time" class="noprint"></span>
					<script type="text/javascript">window.onload = date_time('date_time');</script>
				</p>
				
				<p id="source" class="printonly">
					Source: http://localhost/devtest/WatsonBlog/index.php
				</p>
			</footer><!-- end footer -->

		</div><!-- end container -->
	</body>
</html>