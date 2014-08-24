<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo site_name(); ?></title>

		<meta name="description" content="<?php echo site_description(); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<link rel="stylesheet" href="<?php echo theme_url('/css/vendor/bootstrap.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('/css/vendor/bootstrap-theme.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('/css/app.css'); ?>">

		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
		<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png?v2'); ?>">

		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script src="<?php echo theme_url('js/vendor/modernizr.min.js'); ?>"></script>

		<script>var base = '<?php echo theme_url(); ?>';</script>

	    <meta property="og:title" content="<?php echo site_name(); ?>">
	    <meta property="og:type" content="website">
	    <meta property="og:url" content="<?php echo full_url(); ?>">
	    <meta property="og:image" content="http://erwandorgeville.com<?php echo theme_url('img/og_image.png'); ?>">
	    <meta property="og:site_name" content="<?php echo site_name(); ?>">
	    <meta property="og:description" content="<?php echo site_description(); ?>">

		<?php if(customised()): ?>
		    <!-- Custom CSS -->
    		<style><?php echo article_css(); ?></style>

    		<!--  Custom Javascript -->
    		<script><?php echo article_js(); ?></script>
		<?php endif; ?>

		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-36343347-1']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
	</head>
	<body class="<?php echo body_class(); ?>">
	<?php include "fb-sdk.php"; ?>
	<header>
		<div id="wow">
			<div class="veryblack">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<h1><?php echo site_name(); ?></h1>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<h2><?php echo site_description(); ?><span> | </span><a href="mailto:info@erwandorgeville.com" target="_blank">info@erwandorgeville.com</a></h2>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<div id="fb-like" class="hidden-print">
								<?php include "fb-like.php"; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>