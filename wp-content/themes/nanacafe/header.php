<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>nanacafe</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/main.css">
	<?php wp_enqueue_script('jquery'); ?>
	<?php wp_enqueue_script('bootstrap-js','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',array('jquery')); ?>
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<nav class="navbar navbar-default" style="margin-bottom:0;">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
				<span class="sr-only">メニュー</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
			</div>
			<div id="bs-navbar-collapse-1" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="#">TOP</a></li>
					<li><a href="#">SESTEM</a></li>
					<li><a href="#">NEWS</a></li>
					<li><a href="#">CONTACT</a></li>
				</ul>
			</div>
		</nav>
		<div id="top-vg">
			<img src="<?php echo get_template_directory_uri(); ?>/images/top.jpeg"  alt="トップページ画像">
		</div>
	</header>