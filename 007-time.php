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
		<meta name="keywords" content="blog Watson cat 007 James Bond film">
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
		
			<!-- This holds everything -->
			<header>
				<img src="assets/header.gif" class ="printonly" alt="Wats-on in my life">
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
					//Display the image from the specified directory in $dir_name
					echo '<div class="blog-image"><figure><img src="'.$dir_name.'/'.'007-time.jpg" alt="Watson casually watching a James Bond film."/></figure></div>';
				?>
			</div> <!-- end main column -->
				
			<div id="article2" class="printonly">
				<h1>007 Time</h1>
				<p>
					These humans are surprisingly amusing with their odd quirks and devices. Throughout my time here with my owner (did I ever tell you I've affectionately
					named her 'moving scratch tower' or MST for short?) I have been forced to watch or fall asleep to many strange things such as the various TV 
					programmes she insists on watching. For the most part, I just close my eyes and dream of catnip and catching birds and butterflies until I fall asleep
					but not today. 
				</p>
				
				<p>
					I can't believe I'm actually saying this but today she was watching something decent. Something that didn't make me want to claw my eyes out.
					Today she decided to indulge in some James Bond films. When I first saw them, I thought that they were beyond ridiculous. What kind of idiot can't tell
					that those 'bond girls' are more plastic than my water bowl? Honestly, the things these humans believe. It's enough to make me vomit. 
				</p>
				
				<p>
					It's a wonder how 007 never dies because if you consider everything he's been through, he's probably lost all of his nine lives. And don't even get me
					started on the fact that his face keeps changing as we move from film to film. That man changes faces almost as often as I attack people when I'm feeling bored. 
					There were an outrageous amount of things wrong with those films, for example the lack of felines was outrageous. WE ARE THE SUPERIOR SPECIES. Humans only 
					exist to serve us and the sooner they realise that, the better and maybe I won't bite them as much. 
				</p>
			</div>
			
			<!-- begin footer -->
			<footer>
				<p class="printonly">Copyright &copy; Wats-on in my life 2014<br>
					<span id="date_time" class="noprint"></span>
					<!--Below code links to a JavaScript file that finds and displays the current time-->
					<script type="text/javascript">window.onload = date_time('date_time');</script>
				</p>
				
				<p id="source" class="printonly">
					Source: http://localhost/devtest/WatsonBlog/index.php
				</p>
			</footer><!-- end footer -->

		</div><!-- end container -->
	</body>
</html>