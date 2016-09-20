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
		<meta name="keywords" content="blog Watson cat kelson reluctant friend territory feud">
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
			<!-- Below is the code to implement the Tumblr follow button in the top right hand corner of the page -->
			<iframe class="noprint" border="0" allowtransparency="true" src="http://platform.tumblr.com/v1/follow_button.html?button_type=2&tumblelog=watsoninmylife&color_scheme=dark" scrolling="no" width="113" frameborder="0" height="25"></iframe>
		
			<!-- Below is the JavaScript that is required for the Facebook like button to display and work -->
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
					echo '<div class="blog-image"><figure><img src="'.$dir_name.'/'.'kelson.jpg" alt="Kelson sitting on top of a fence."/></figure></div>';
				?>
			</div> <!-- end main column -->
				
			<div id="article2" class="printonly">
				<h1>Kelson</h1>
				<p>
					Normally, I don't have an issue with cats staying away from me and my home but then this 
					jerk of a cat decided to show up and ruin everything! I will be taking a nice little cat nap in
					my very comfortable bed and then ya know what happens?
				</p>
				
				<p>
					This <i>beast</i> of a cat rocks on up like he owns the bloody place. He just sits there on the bloody
					welcome mat and if that wasn't bad enough my owner (female human-thing) has taken a liking to that <i>thing</i>. It's 
					absolutely atrocious. Every time she see that cat, she's always taking pictures of it and talking to it. Uh, hello!
					Handsome cat right here. Yeah, remember me? YOU STOLE ME FROM MY FAMILY AND ARE IGNORING ME IN FAVOUR FOR SOME
					SAD EXCUSE OF A CAT.	
				</p>
				
				<p>
					It's not even as though I can blame her for getting so easily distracted. Poor thing. You see humans are not 
					actually very smart. You do one simple thing like taking a nap and all of a sudden you are in the spotlight. 
					The flash is going off and a million pictures are being taken. Yes, those tiny brains of theirs just aren't
					quite up to scratch with my own wit and intelligence.
				</p>
				
				<p>
					However, it is still no excuse for my mistreatment. I should be the centre of attention at all times when I 
					am present. Everyone knows that. And if this <i>thing</i> my owner calls 'Kelson' (see, it even stole the last 
					three letters of my name. Bloody copy cat) ever comes near my home again, the claws are going to come out and there'll
					be hell to pay.
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