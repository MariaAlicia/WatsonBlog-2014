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
		<meta name="keywords" content="blog Watson cat toilet paper">
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
		
			<!-- This holds everything -->
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
					echo '<div class="blog-image"><figure><img src="'.$dir_name.'/'.'audition-for-purex.jpg" alt="Watson getting distracted by a roll of toilet paper."/></figure></div>';
				?>
			</div> <!-- end main column -->
				
			<div id="article2" class="printonly">
				<h1>Audition for Purex</h1>
				<p>
					You know, just the other day as I was minding my own business, I saw something completely unacceptable on the TV. You know what I saw?
					<br>A dog.<br>
					Oh, but this wasn't just any old dog. This was a dog on a TV ad, as in that little mutt got payed to play with toilet paper. And this ad really got 
					me thinking. Why should it be dogs who get to have all the fun (and wealth)? Cats are much better. We reign supreme over them. Which is how I came up 
					with this brilliant idea.
				</p>
				
				<p>
					Here I present my new headshot. I shall begin to distribute them around the neigbourhood and eventually the word will spread that there is a new,
					much better animal actor in town. Pretty soon, it will be my face on the Purex ad instead of that little mutt they have at the moment. Oh the horror.
					I'm telling ya, they really have to do something about all of these dogs there. There isn't enough room here for both species. 
				</p>
				
				<p>
					Cats need something more sophiscated than dogs. We need the finer things in life such as high quality meat and an abundance of catnip to share around.
					Obviously, the clearest course of action is to dump all the dogs in the world onto an island by themselves where they can do as they please and not
					bother anyone of us.
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