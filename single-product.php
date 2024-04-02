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
						<p>See more Details</p>
						<h1>Single Product</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
		require_once("data/connection.php"); 
		
		$id = $_GET["id"];
		$color = $_GET["boja"];
		$temp = $connection->query("SELECT p.product_id, p.naziv AS naziv, s.boja AS boja, cena, opis, alt, k.naziv AS kategorija, src  
		FROM products p INNER JOIN kategorija k ON p.kategorija_id=k.kategorija_id INNER JOIN slike s ON p.product_id=s.product_id 
		WHERE p.product_id=$id 
		AND boja='$color'");
		$product = $temp->fetch();
	?>
	<div class="single-product mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="single-product-img">
						<img src="assets/img/products/<?=$product->src?>" alt="<?=$product->alt?>">
					</div>
				</div>
				<div class="col-md-7">
					<div class="single-product-content">
						<h3><?=$product->naziv?></h3>
						<p><strong>Category: </strong><?=$product->kategorija?></p>
						<p class="single-product-pricing"><span><?=$product->kategorija?></span> <?=$product->cena?> e</p>
						<p><?=$product->opis?><br/>Color: <?=$product->boja?></p>
						<div class="single-product-form">
						</div>
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