<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
	<script src="https://unpkg.com/scrollreveal"></script>

  <title><?php bloginfo('name'); wp_title('|',true,'left'); ?></title>
  <?php wp_head(); ?>
</head>
	<body>
		<header>
			<div class="sp">
				<div class="inner">
					<h1>
						<a href="<?php echo home_url(); ?>">
title</a>
					</h1>
					<div class="spMenu">
						<div class="hamburger">
							<span></span>
							<span></span>
							<span></span>
						</div>
						<ul class="list">
							<li><a href="#about">About</a></li>
							<li><a href="#works">Works</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>

					</div>
				</div>
			</div>
		</header>
