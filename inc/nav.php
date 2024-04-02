<?php
	session_start();
?>
<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<div class="site-logo">
							<a href="index.php">
								<span class="logoIcon">GameLand</span>
							</a>
						</div>
						<nav class="main-menu">
							<ul>
								<li><a href="shop.php">Shop</a>
								<li><a href="about.php">About</a></li>
								<li><a href="author.php">Author</a></li>
								<li><a href="contact.php">Contact</a></li>
								
								<?php
								if (!isset($_SESSION["korisnik"])) {
								?>
								<li><a href="logovanje.php">Login</a>
								<li><a href="register.php">Register</a></li>
								</li>
								<?php	
								}else {
									?>
									<li><a href="adminpanel.php">Admin Panel</a></li>
									<li>
										<form action="backend/log_out.php" method="POST"><input type="submit" value="Log out"></form>
									</li>									
									<?php
								} 
								?>
								</li>
								
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
					</div>
				</div>
			</div>
		</div>
	</div>