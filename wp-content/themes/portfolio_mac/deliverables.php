<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
		/>
		<title>YUSUKE KATO's Portfolio</title>
		<link rel="stylesheet" href="./assets/css/reset.css" />
		<link rel="stylesheet" href="./assets/css/style.css" />
		<script src="./assets/js/vendor/jquery-1.10.2.min.js"></script>
		<script src="./assets/js/index.js"></script>
		<link
			href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
			rel="stylesheet"
		/>
		<script src="https://unpkg.com/scrollreveal"></script>
	</head>
	<body>
		<header>
			<div class="inner">
				<h1>
					<a href="#"> Nam </a>
				</h1>
				<nav>
					<ul class="list">
						<li><a href="#">ABOUT</a></li>
						<li><a href="#">WORKS</a></li>
						<li><a href="#">SERVICES</a></li>
						<li><a href="#">CONTACT</a></li>
					</ul>
				</nav>
				<div class="spMenu">
					<div class="hamburger">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
			</div>
		</header>
		<main>
			<section class="firstView">
				<div class="inner">
					<p class="top1">Welcome to my Portfolio</p>
					<p class="top2">Test User</p>
				</div>
			</section>
			<section class="about">
				<div class="inner">
					<div class="heading">
						<h2>about</h2>
					</div>
					<div class="contentsWrap">
						<div class="introduce">
							<img src="./assets/img/nakamura8.jpg" alt="" />
						</div>
						<div class="details">
							<div class="profile">
								<p>加藤優介</p>
								<p>2歳</p>
								<p>
									今年の6月からWeb制作の学習を始めました。<br />
									まだ経験不足なので日々勉強に励んでいます。<br />
								</p>
							</div>
							<div class="skillWrap">
								<div class="skill">
									<p class="skillImage">
										<img src="./assets/img/nakamura1.jpg" alt="WordPress" />
									</p>
									<p class="skillName">HTML,CSS</p>
								</div>
								<div class="skill">
									<p class="skillImage">
										<img src="./assets/img/nakamura1.jpg" alt="WordPress" />
									</p>
									<p class="skillName">jQuery</p>
								</div>
								<div class="skill">
									<p class="skillImage">
										<img src="./assets/img/nakamura1.jpg" alt="WordPress" />
									</p>
									<p class="skillName">WordPress</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="works">
				<div class="inner">
					<div class="heading">
						<h2>Works</h2>
					</div>
					<div class="contentsWrap">
						<div class="deliverables">
							<a href="">
								<div class="image">成果物</div>
							</a>
						</div>
						<div class="deliverables">
							<a href="">
								<div class="image">成果物</div>
							</a>
						</div>
						<div class="deliverables">
							<a href="">
								<div class="image">成果物</div>
							</a>
						</div>
						<div class="deliverables">
							<a href="">
								<div class="image">成果物</div>
							</a>
						</div>
					</div>
				</div>
			</section>
			<section class="contact_form">
				<div class="heading">
					<h2>Contact</h2>
				</div>
				<div class="contentsWrap">
					<form>
						<div class="item">
							<div class="label">お名前<span>(必須)</span></div>
							<input class="inputs" type="text" name="name" />
						</div>
						<div class="item">
							<div class="label">メールアドレス<span>(必須)</span></div>
							<input class="inputs" type="email" name="email" />
						</div>
						<div class="item">
							<div class="label">お問い合わせ内容<span>(必須)</span></div>
							<textarea class="inputs"></textarea>
						</div>
						<div class="submit">
							<input
								type="submit"
								formaction="contact_comfirm.html"
								value="確認"
								class="btn"
							/>
						</div>
					</form>
				</div>
			</section>
		</main>
	</body>
</html>