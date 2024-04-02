<!DOCTYPE html>
<html lang="en">
<head>
<?php
	require_once "inc/head.php";
	?>
</head>
<body>
	<?php
		require_once "inc/preload.php";
	?>
	<?php
		require_once "inc/nav.php";
	?>
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>We develop web sites</p>
						<h1>Author</h1>
					</div>
				</div>
			</div>
		</div>
</div>
	<div class="mt-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3><span class="orange-text">Author</span></h3>
						<p>Jovan Cajic 196/18</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="single-team-item">
						<div class="team-bg team-bg-1"></div>
						<h4>Jovan Cajic<span>Web Developer</span></h4>
						<ul class="social-link-team">
							<li><a href="https://facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="https://twitter.com/CajicJ" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="https://www.instagram.com/jovan_cajic/" target="_blank"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="single-team-item text-center">
						<h3>About author of the site</h3>
						<p>I am Jovan Čajić, student of Information and Communication Technologies. <br/>
							I'm 24, born in Belgrade, Serbia. Graduated from High School in 2017. <br/>
							From when I was a youngling I was connected to PC and everything about it, from playing games to exceling at multiple usefull programms.<br/>
							Attended faculty of Mechanical Engineering for one year, before i decided to study at ICT.<br/>
							Currently employed as a Quality Assurance Technician, while building my web developing skills and portfolio.<br/>
						</p>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<?php
	require_once "inc/footer.php";
	require_once "inc/scripts.php";
	?>
</body>
</html>