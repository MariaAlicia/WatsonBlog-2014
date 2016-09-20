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
		<meta name="keywords" content="blog Watson cat">
		<link rel="stylesheet" href="css/default.css" type="text/css" media="all" />
		<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
		<script type="text/javascript" src="date_time.js"></script>
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5-els.js"></script>
		<![endif]-->
		<div id="login">
		<SCRIPT language = "JavaScript">
					var usrcheck="Watson";
					var usrname=prompt ('Enter username',' ');
				
					var passcheck="dalek"; var password=prompt ('Enter Password',' ');
					//the prompt command sets the default answer to ' '

					if 
						(password==passcheck && usrname==usrcheck) ;
					else
					//redirects to new page if incorrect password, this can be localhost
						{window.location="http://www.google.co.nz";}
		</SCRIPT> 
	</head>
	
	<body>
		<!-- begin container to centre layout in middle of page -->
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
			<h1 class="printonly">Wats-on in my life</h1>
		</header>
		
		<div id="container">
			<!-- This holds everything -->
			
			<!-- navigation-->
			<nav class="noprint">
				<a href="index.php"><button>Home Page</button></a>
				<div class="fb-like" data-href="https://www.facebook.com/watsoninmylife" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
			</nav> <!-- end navigation -->
			
			<!-- begin main column -->
			<article class="printonly">
				<h1>Welcome to my blog.</h1>
		
				<p>
					This is my blog. There are many picture links to my blog posts beacuse that's just the way I like it.
					<br>
					P.S No dogs allowed.
				</p>
				
				<?php
				/*the directory/folder to open*/
					$dir_name = "images";
					$dir_thumb = "images-thumb";
					$dir_posts = "blogposts";
				/*open up the directory*/
					$directory = @opendir ($dir_name);
					if(!$directory) {
					//There was no result or no directory
						echo "There is a problem with the website.";
						die ("I suggest you try again later.");
					}
					
					while ($file=readdir($directory)){
						//Retrieve information about the file
						$path_info = pathinfo($file);
						//Extract the extenstion from the file information
						$extension = $path_info['extension'];
						//Variable for file name without the extension. This is used to link the images to their individual blog page
						$postfile = basename($file,".jpg");
						if ($extension != 'jpg') {
							//if the file doesn't have the extension .jpg then don't show it
							continue; //skip current iteration of loop from here
						}
						echo '<a href="'.$postfile.'.php" target="_blank"><figure><img src="'. $dir_thumb . '/' . $file. '" alt="'.$postfile.'"><figcaption>'.$postfile.'</figcaption></figure></a>';
						//Above code has the images linked to their individual blog page and uses the file name (without the extension) as the alt text and the caption
					}
				?>
			
			</article> <!-- end main column -->
				
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