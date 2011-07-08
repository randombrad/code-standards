<?php
$page_title = "Front-end Code Standards &amp; Best Practices";
$page_keywords = "css code standards, best code practices, development, frontend development";
$page_description = "";
$protocol = (strstr('https',$_SERVER['SERVER_PROTOCOL']) === false)?'http':'https'; 
$page_root = $protocol.'://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['REQUEST_URI']);
include_once('layout/header.php');
?>

	<body>
		<a class="fork" href="https://github.com/randombrad/code-standards/" target="_blank"></a>
		<div id="container">
		
			<header role="banner">
				<h1><a id="logo" href="<?php echo $page_root; ?>">Liferay</a></h1>
				
				<canvas id="canvas-logo" width="500" height="300">
					<strong>Your browser cannot handle the awesomeness of this!</strong>
				</canvas>

                <ul id="social">
					<li><a class="icon" href="//facebook.com/liferay" id="facebook"></a></li>
					<li><a class="icon" href="//twitter.com/liferay" id="twitter"></a></li>
					<li><a href="http://liferay.com" id="linkback">Return to Liferay</a></li>
				</ul>
			</header>

			
			<div id="main" role="document">
				<h1>Front-end Code Standards &amp; Best Practices</h1>
			
				<?php
				//include_once('sections/general.html');
				include_once('sections/liferay.html');
				//include_once('sections/markup.html');
				//include_once('sections/css.html');
				//include_once('sections/javascript.html');
				//include_once('sections/performance.html');
				//include_once('sections/browsers.html');
				//include_once('sections/seo.html');
				//include_once('sections/codeReviews.html');
				//include_once('sections/appendices.html');
				//include_once('sections/revisionHistory.html');
				?>

			</div><!--! End of #main section !-->
			
			<nav id="side" class="nav-right" role="navigation">
				<h3 class="toc-title">Table of Contents</h3>
				<ul id="toc" style="display:none"></ul>
				<noscript><p><a href="http://enable-javascript.com">Please enable JavaScript</a>.</p></noscript>
			</nav>
			
		</div><!--! end of #container !-->

		<footer role="contentinfo">
			<p>
				<span class="float_left"><?php print date("Y"); ?> Liferay, Inc. All rights reserved.</span>
			</p>
		</footer>


		<!-- JavaScript at the bottom for fast page loading -->

		<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
		<script>
			window.jQuery || document.write("<script src='js/libs/jquery-1.5.2.min.js'>\x3C/script>")
		</script>
		<!-- scripts concatenated and minified via ant build script-->
		<script src="js/plugins.js"></script>
		<script src="js/script.js"></script>
   
		<!-- end scripts-->

		<!--[if lt IE 7 ]>
		<script src="js/libs/dd_belatedpng.js"></script>
		<script>DD_belatedPNG.fix("img, .png_bg"); // Fix any <img> or .png_bg bg-images. Also, please read goo.gl/mZiyb </script>
		<![endif]-->
		
	</body>
</html>