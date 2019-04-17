<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title>MVC-News Главная</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="../../template/images/favicon.ico" />
	<link rel="stylesheet" href="../../template/css/style.css" type="text/css" media="all" />
	<!--[if IE 6]>
		<link rel="stylesheet" href="template/css/ie6.css" type="text/css" media="all" />
		<script src="template/js/png-fix.js" type="text/javascript"></script>
	<![endif]-->
	<script src="../../template/js/jquery-1.4.2.js" type="text/javascript"></script>
	<script src="../../template/js/jquery.jcarousel.js" type="text/javascript"></script>
	<script src="../../template/js/js-func.js" type="text/javascript"></script>
</head>
<body>
<!-- Header -->
<div id="header">
	<div class="shell">
		<h1 id="logo" class="notext"><a href="#">Plain Plan - Keep youy website simple</a></h1>
		<div id="navigation">
			<ul>
			    <li><a href="#" class="active">Home</a></li>
			    <li><a href="/news/archive">Archive</a></li>
			    <li><a href="#">Services</a>
			    	<div class="dd-holder">
			    		<div class="dd-t"></div>
			    		<div class="dd">
			    			<ul>
			    			    <li><a href="#">Sub Level 1</a></li>
			    			    <li><a href="#">Sub Level 1</a></li>
			    			    <li><a href="#">Sub Level 1</a></li>
			    			    <li><a href="#">Sub Level 1</a></li>
			    			</ul>
			    		</div>
			    		<div class="dd-b"></div>
			    	</div>
			    </li>
			    <li><a href="#">Projects</a></li>
			    <li><a href="#">Blog</a></li>
			    <li><a href="#">Contact</a></li>
			</ul>
		</div>
	</div>
</div>
<!-- End Header -->
<!-- Slider -->
<div id="slider">
	<div class="shell">
		<div class="slider-left">
			<h2>Lorem ipsum dolor sit amet</h2>
			<p>Quisque eleifend, arcu a dictum v1arius, risus neque venenatis arcu, a semper massa. Quisque eleifend, arcu a dictum v1arius, risus neque venenatis arcu, a semper massa.</p>
			<a href="#" class="order-now">Order Now</a>
		</div>
		<div class="slider-right">
			<div class="slider-content">
				<ul>
				    <li><img src="../../template/images/slider-image.jpg" alt="" /></li>
				    <li><img src="../../template/images/slider-image.jpg" alt="" /></li>
				    <li><img src="../../template/images/slider-image.jpg" alt="" /></li>
				    <li><img src="../../template/images/slider-image.jpg" alt="" /></li>
				    <li><img src="../../template/images/slider-image.jpg" alt="" /></li>
				</ul>
			</div>
			<div class="slider-nav">
				<ul>
				    <li><a href="#">1</a></li>
				    <li><a href="#">2</a></li>
				    <li><a href="#" class="active">3</a></li>
				    <li><a href="#">4</a></li>
				    <li><a href="#">5</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- End Slider -->
<!-- Main -->
<div id="main">
	<div class="shell">
		<div id="sidebar">
			<div class="text-container">
				<h2>A side bar here</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dictum, neque ut imperdiet pellentesque, nulla tellus tempus magna, sed consectetur orci metus a justo. Aliquam ac congue nunc. Mauris a tortor ut massa egestas tempus. Pellentesque tincidunt fermentum diam sagittis ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
			<div class="post">
				<h2>Latest Project</h2>
				<img src="../../template/images/post-image1.gif" alt="" />
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dictum, neque ut imperdiet pellentesque, nulla tellus tempus magna, sed consectetur orci metus a justo. Aliquam ac congue nunc. Mauris a tortor ut massa egestas tempus. Pellentesque tincidunt </p>
				<a href="#" class="more">more</a>
			</div>
		</div>
		<div id="content">


			<div class="col">
				<div class="post">
					<h2><?php echo $newsItem['title'] ?></h2>
					<img src="../../template/<?php echo $newsItem['preview'] ?>" alt="" class="right" />
					<p><?php echo $newsItem['content'] ?></p>
					<div class="cl">&nbsp;</div>
					<a href="/news" class="more">home</a>
				</div>
			</div>



		</div>
		<div class="cl">&nbsp;</div>
	</div>
</div>
<!-- End Main -->
<!-- Footer -->
<div id="footer">
	<div class="shell">
		<p class="left">
			<a href="#">Home</a>
			<span>|</span>
			<a href="#">About</a>
			<span>|</span>
			<a href="#">Services</a>
			<span>|</span>
			<a href="#">Projects</a>
			<span>|</span>
			<a href="#">Blog</a>
			<span>|</span>
			<a href="#">Contact</a>
		</p>
		<p class="right">
			SBP7 - 2019
        </p>
	</div>
</div>
<!-- End Footer -->
</body>
</html>