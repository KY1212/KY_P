<?php
/*
Template Name: works
*/
get_header('other'); ?>
		<main>
			<section class="firstView sp">
				<div class="inner">
					<div class="contentsWrap">
						<div class="topWrap">
							<div class="top1">
								Welcome to my Portfolio<span>Welcome to my Portfolio</span>
							</div>
							<p class="top2">Yusuke Kato<span>Yusuke Kato</span></p>
						</div>
						<div class="menu">
							<ul class="list">
								<li>
									<a href="<?php echo get_stylesheet_directory_uri(); ?>./about.php">ABOUT<span>ABOUT</span></a>
								</li>
								<li>
									<a href="<?php echo get_stylesheet_directory_uri(); ?>./works.php">WORKS<span>WORKS</span></a>
								</li>
								<li>
									<a href="<?php echo get_stylesheet_directory_uri(); ?>./contact.php">CONTACT<span>CONTACT</span></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<section class="about sp" id="about">
				<div class="inner">
					<h2 class="heading">About<span>About</span></h2>
					<div class="contentsWrap">
						<div class="introduce">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/nakamura8.jpg" alt="" />
						</div>
						<div class="detailsWrap">
							<div class="detailsBox">
								<span class="box-title">Profile</span>
								<p>加藤優介</p>
								<p>26歳</p>
								<p>
									今年の6月からWeb制作の学習を始めました。<br />
									まだ経験不足なので日々勉強に励んでいます。<br />
								</p>
							</div>
							<div class="detailsBox">
								<span class="box-title">Skill</span>
								<div class="skillWrap">
									<div class="skill">
										<p class="skillImage">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/html.png" alt="html" />
										</p>
										<p class="skillName"></p>
									</div>
									<div class="skill">
										<p class="skillImage">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/css.png" alt="css" />
										</p>
										<p class="skillName"></p>
									</div>
									<div class="skill">
										<p class="skillImage">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jquery.png" alt="jquery" />
										</p>
										<p class="skillName"></p>
									</div>
									<div class="skill">
										<p class="skillImage">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/wordpress.png" alt="WordPress" />
										</p>
										<p class="skillName"></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="works target" id="works">
				<div class="inner">
					<h2 class="heading">Works<span>Works</span></h2>
					<div class="contentsWrap">
						<div class="deliverables">
							<a href="./deliverables.html">
								<div class="image">成果物</div>
							</a>
						</div>
						<div class="deliverables">
							<a href="./deliverables.html">
								<div class="image">成果物</div>
							</a>
						</div>
						<div class="deliverables">
							<a href="./deliverables.html">
								<div class="image">成果物</div>
							</a>
						</div>
						<div class="deliverables">
							<a href="./deliverables.html">
								<div class="image">成果物</div>
							</a>
						</div>
					</div>
				</div>
			</section>
			<section class="form sp" id="form">
				<div class="inner">
					<h2 class="heading">Contact<span>Contact</span></h2>
					<div class="contentsWrap">
			<?php echo do_shortcode( '[mwform_formkey key="44"]' ); ?>

					</div>
				</div>
			</section>
		</main>
<?php
		get_footer();
	?>
	</body>
</html>
