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
						<p>Get our gaming support</p>
						<h1>Contact us</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="form-title">
						<h2>Ask us anything?</h2>
						<p>If you have any questions, recommendations or complaints feel free to notify us in the form below!</p>
					</div>
				 	<div id="form_status"></div>
					<div class="contact-form">
						<form type="POST" id="contact">
							<p>
								<input type="text" placeholder="Name" name="name" id="name">
								<input type="email" placeholder="Email" name="email" id="email">
							</p>
							<p><textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea></p>
							<input type="hidden" name="token" value="FsWga4&@f6aw" />
							<p><input type="submit" value="Submit"></p>
						</form>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="contact-form-wrap">
						<div class="contact-form-box">
							<h4><i class="fas fa-map"></i> Shop Address</h4>
							<p>69/420 <br> Hobbiton <br> New Zealand</p>
						</div>
						<div class="contact-form-box">
							<h4><i class="far fa-clock"></i> Shop Hours</h4>
							<p>MON - FRIDAY: 8 to 9 PM <br> SAT - SUN: 10 to 8 PM </p>
						</div>
						<div class="contact-form-box">
							<h4><i class="fas fa-address-book"></i> Contact</h4>
							<p>Phone: +381/1234567 <br> Email: support@GameLand.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="find-location blue-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<p> <i class="fas fa-map-marker-alt"></i> Find Our Location</p>
				</div>
			</div>
		</div>
	</div>
	<div class="embed-responsive embed-responsive-21by9">
		<iframe src="https://maps.google.com/maps?q=hobitton&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" class="embed-responsive-item"></iframe>
	</div>
	<?php
	require_once "inc/footer.php";
	require_once "inc/scripts.php";
	?>
</body>
</html>