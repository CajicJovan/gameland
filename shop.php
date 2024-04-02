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

	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Our products</p>
						<h1>Shop</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="search-text" >
			<h3>Search For:</h3>
			<input type="search" placeholder="Search" name="pretraga" id="search">
	</div>
					
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					
					<div class="product-filters">
						<ul>
							<li class="active" data-filter="*">All</li>
							<li data-filter=".PC">PC</li>
							<li data-filter=".XB">XB</li>
							<li data-filter=".PS">PS</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row product-lists">
				<?php
				include_once("data/connection.php");
				global $connection;
				$limit = 6;
				if (!isset($_GET['page'])) {
					$page = 1;
				} else {
					$page = $_GET['page'];
				}
				$query = "SELECT * FROM products";
				$rowCount = $connection->query($query)->rowCount();
				$pageCount = ceil($rowCount / $limit);
				$start = ($page - 1) * $limit;
				$query = "SELECT *, k.naziv AS Kategorija, p.naziv as naziv FROM products p INNER JOIN slike s ON p.product_id = s.product_id INNER JOIN kategorija k ON p.kategorija_id = k.kategorija_id ORDER BY p.product_id LIMIT $start,$limit ";
				$result = $connection->query($query)->fetchAll();
				if ($result) {
					$output = "";
					foreach ($result as $res) {
						$output .= "<div class='col-lg-4 col-md-6 text-center $res->Kategorija'>";
						$output .= "<div class='single-product-item'>";
						$output .= "<div class='product-image'>";
						$output .= "<a href='single-product.php?id=$res->product_id&boja=$res->boja'><img src='assets/img/products/$res->src' alt='$res->alt'></a></div>";
						$output .= "<h3>$res->naziv</h3>";	
						$output .= "<p class='product-price'><span>$res->opis";
						$output .= "<br/> $res->boja";
						$output .= "</span>$res->cena e";
						$output .= "</p><h5>$res->Kategorija</h5></div></div>";
					}
					if($pageCount>1){
						$output.="<br><div class='row col-12'>
						<div class='col-lg-12 text-center'>
							<div class='pagination-wrap'><ul>";
							for ($i = 1; $i <= $pageCount; $i++) {
								$class = $page == $i ? 'active' : "";
								$output .= "<li class='" . $class . "'><a href='shop.php?&page=" . $i . "'>" . $i . "</a></li>";
							}
							$output.="</ul></div></div></div>";
					}
					
					$output .= "</div></div>";
					echo $output;
				}
				?>
			</div>				
		</div>
	</div>
	<?php
	require_once "inc/footer.php";
	require_once "inc/scripts.php";
	?>

</body>

</html>