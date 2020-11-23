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
			<div class="pc">
				<div class="inner">
					<h1>
						<a href="<?php echo home_url(); ?>">title</a>
					</h1>
					<nav>
						<ul class="list">
							<li><a href="<?php echo get_stylesheet_directory_uri(); ?>/about">ABOUT</a></li>
							<li><a href="<?php echo get_stylesheet_directory_uri(); ?>/works">WORKS</a></li>
							<li><a href="<?php echo get_stylesheet_directory_uri(); ?>/contact">CONTACT</a></li>
						</ul>
					</nav>
				</div>
			</div>
			<div class="sp">
				<div class="inner">
					<div class="spMenu">
						<div class="hamburger">
							<span></span>
							<span></span>
							<span></span>
						</div>
						<ul class="list">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'global',
									'menu_class' => 'list',
									'depth' => 1
								));
							?>
						</ul>
					</div>
				</div>
			</div>
		</header>
